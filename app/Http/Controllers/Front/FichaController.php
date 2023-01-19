<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\ForumTopic;
use App\Models\Like;
use App\Models\Modelo;
use App\Models\PiezaClave;
use App\Models\TopicMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{

    public function datosGenerales(Modelo $modelo, Request $request)
    {
        $detalle = $modelo->metadata_modelo ?? [];
        return view('front.page.fichas.datos_generales', compact('modelo', 'detalle'));
    }
    public function informacionFicha(Modelo $modelo)
    {
        return view('front.page.fichas.informacion_ficha', compact('modelo'));
    }
    public function renderHeaderFicha(Request $request)
    {
        if($request->type=='modelo'){
            $modelo=Modelo::find($request->modelo_id);
            return view('front.fichas.variantes.header_info',['type'=>'modelo',
            'title'=>'',
            'modelo'=>$modelo,
            'pieza'=>$modelo->piezasClave()->first()])->render();
        }
        if($request->type=='pieza'){
            $modelo=Modelo::find($request->modelo_id);
            $pieza=PiezaClave::find($request->pieza_id);
            return view('front.fichas.variantes.header_info',['type'=>'pieza',
            'title'=>$pieza->pieza_clave,
            'modelo'=>$modelo,
            'pieza'=>$pieza])->render();
        }
        if($request->type=='variante'){
            $modelo=Modelo::find($request->modelo_id);
        $pieza=PiezaClave::find($request->pieza_id);
        return view('front.fichas.variantes.header_info',['type'=>'variante',
                'title'=>$request->codigo,
                'modelo'=>$modelo,
                'pieza'=>$pieza,
                'variante'=>$request->variante,
                'modeloCodigo'=>$request->codigo,
                'pieza_clave_id_'=>$pieza->id])->render();
        }
        
    }
    public function sendComment(Request $request){
        $foro=Forum::where('modelo_id',$request->modelo)->first();
        if(!$foro){
            $foro=new Forum();
            $foro->title=$request->codigo;
            $foro->modelo_id=$request->modelo;
            $foro->save();
        }else{
            $foro->touch();
        }
        $topic=new ForumTopic();
        $topic->forum_id=$foro->id;
        $topic->user_id=$request->user()->id;
        $topic->title='';
        $topic->description=$request->text;
        $topic->save();
        return view('front.page.fichas.foro.comment_main',compact('topic'))->render();
    }
    public function likeTopic(Request $request){
        $like=Like::where('user_id',$request->user()->id)->where('forum_topic_id',$request->id)->first();
        if($like){
            $like->delete();
            $count=Like::where('forum_topic_id',$request->id)->count();
            return response()->json(['state'=>false,'count'=>$count]);
        }else{
            $like=new Like();
            $like->forum_id=$request->forum;
            $like->user_id=$request->user()->id;
            $like->forum_topic_id=$request->id;
            $like->save();
            $count=Like::where('forum_topic_id',$request->id)->count();
            return response()->json(['state'=>true,'count'=>$count]);
        }
    }
    public function messageTopic(Request $request){
        $forum=Forum::find($request->forum)->touch();
        $message=new TopicMessage();
        $message->forum_id=$request->forum;
        $message->user_id=$request->user()->id;
        $message->forum_topic_id=$request->id;
        $message->comment=$request->text;
        $message->save();
        $count=TopicMessage::where('forum_topic_id',$request->id)->count();

        return response()->json([
            'render'=>view('front.page.fichas.foro.comment_second',compact('message'))->render(),
            'count'=>$count]);
    }
    public function likeMessage(Request $request){
        $like=Like::where('user_id',$request->user()->id)->where('topic_message_id',$request->id)->first();
        if($like){
            $like->delete();
            $count=Like::where('topic_message_id',$request->id)->count();
            return response()->json(['state'=>false,'count'=>$count]);
        }else{
            $like=new Like();
            $like->forum_id=$request->forum;
            $like->user_id=$request->user()->id;
            $like->topic_message_id=$request->id;
            $like->save();
            $count=Like::where('topic_message_id',$request->id)->count();
            return response()->json(['state'=>true,'count'=>$count]);
        }
    }
    public function renderFichaComment(Request $request){
        if($request->type=="more"){
            $text='';
            $topics=Forum::where('modelo_id', $request->modelo)->first()->forum_topics()->withCount('topic_messages')->orderBy('topic_messages_count','DESC')->get();
            foreach($topics as $topic){
                $text.=view('front.page.fichas.foro.comment_main',compact('topic'))->render();
            }
            return $text;
        }else{  
            $text='';
            $topics=Forum::where('modelo_id', $request->modelo)->first()->forum_topics()->orderBy('created_at','DESC')->get();
            foreach($topics as $topic){
                $text.=view('front.page.fichas.foro.comment_main',compact('topic'))->render();
            }
            return $text;
        }
    }
    public function renderForoComment(Request $request){
        if($request->type=="more"){
            $text='';
            $forums=Forum::withCount(['topic_messages'])->orderBy('topic_messages_count','DESC')->get();
            foreach($forums as $forum){
                $text.=view('front.page.foro.forum',compact('forum'))->render();
            }
            return $text;
        }else{  
            $text='';
            $forums=Forum::orderBy('updated_at','DESC')->get();
            foreach($forums as $forum){
                $text.=view('front.page.foro.forum',compact('forum'))->render();
            }
            return $text;
        }
    }
    public function varianteForma(Modelo $modelo, Request $request)
    {
        $fotos = $modelo->fotosForma()->get();
        return view('front.page.fichas.variante_forma', compact('modelo', 'fotos'));
    }
    public function detalleVarianteForma(Modelo $modelo, string $codigo, Request $request)
    {
        $detalle = $modelo->metadata_forma[$codigo] ?? [];
        if (empty($detalle)) {
            return redirect()->route('front.home');
        }
        $fotos = $modelo->fotoDetalleForma()->codigo($codigo)->get();
        return view('front.page.fichas.detalle_variante_forma', compact('modelo', 'fotos', 'detalle', 'codigo'));

    }
    public function detalleVarianteDecorativa(Modelo $modelo, string $codigo, Request $request)
    {
        $detalle = $modelo->metadata_decorativa[$codigo] ?? [];
        if (empty($detalle)) {
            return redirect()->route('front.home');
        }
        $fotos = $modelo->fotosDecorativas()->codigo($codigo)->get();
        return view('front.page.fichas.detalle_variante_decorativa', compact('modelo', 'fotos', 'detalle', 'codigo'));

    }
    public function detalleVarianteArqueometrica(Modelo $modelo, string $codigo, Request $request)
    {
        $codigo  = $codigo === '-' ? '' : $codigo;
        $detalle = $modelo->metadata_arqueometrica[$codigo] ?? [];
        if (empty($detalle)) {
            return redirect()->route('front.home');
        }
        $fotos = $modelo->fotoDetalleArqueometrica()->codigo($codigo)->get();
        return view('front.page.fichas.detalle_variante_arqueometrica', compact('modelo', 'fotos', 'detalle', 'codigo'));

    }
    public function varianteArqueometrica(Modelo $modelo, Request $request)
    {
        $fotos = $modelo->fotosArqueometricas()->get();
        return view('front.page.fichas.variante_arqueometrica', compact('modelo', 'fotos'));
    }
    public function varianteDecorativa(Modelo $modelo, Request $request)
    {
        $fotos = [];
        $modelo->fotosDecorativas()->get()->map(function ($foto) use (&$fotos) {
            $fotos[$foto->codigo][] = collect($foto);
        });

        $fotos_fiinal = collect();
        collect($fotos)->map(function ($foto) use ($fotos_fiinal) {
            $fotos_fiinal->push(collect($foto)->random());
        });
        return view('front.page.fichas.variante_decorativa', ['modelo' => $modelo, 'fotos' => $fotos_fiinal]);
    }
    public function piezasClave(Modelo $modelo, Request $request)
    {
        return view('front.page.fichas.piezas_clave', compact('modelo'));
    }

}
