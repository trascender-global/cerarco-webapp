@include('svg.map')

@section('scripts')
<script>
    var regions = {
        gua: { area_geografica: "cc", },
        arc: { area_geografica: "cc", },
        sie: { area_geografica: "cc", },
        mag: { area_geografica: "cc", },
        sab: { area_geografica: "cc", },
        sin: { area_geografica: "cc", },
        mom: { area_geografica: "cc", },
        ura: { area_geografica: "cc", },
        nco: { area_geografica: "cp", },
        sco: { area_geografica: "cp", },
        bau: { area_geografica: "cp", },
        atr: { area_geografica: "cp", },
        pac: { area_geografica: "cp", },
        isp: { area_geografica: "cp", },
        pas: { area_geografica: "za", },
        cax: { area_geografica: "za", },
        pat: { area_geografica: "za", },
        noc: { area_geografica: "za", },
        pop: { area_geografica: "za", },
        cau: { area_geografica: "za", },
        can: { area_geografica: "za", },
        mac: { area_geografica: "za", },
        ccs: { area_geografica: "za", },
        mav: { area_geografica: "za", },
        ant: { area_geografica: "za", },
        alm: { area_geografica: "za", },
        mam: { area_geografica: "za", },
        cbo: { area_geografica: "za", },
        san: { area_geografica: "za", },
        sua: { area_geografica: "za", },
        stu: { area_geografica: "za", },
        cat: { area_geografica: "za", },
        mot: { area_geografica: "za", },
        lce: { area_geografica: "za", },
        mce: { area_geografica: "za", },
        ace: { area_geografica: "za", },
        pie: { area_geografica: "or", },
        des: { area_geografica: "or", },
        met: { area_geografica: "or", },
        ori: { area_geografica: "or", },
        mgu: { area_geografica: "or", },
        ara: { area_geografica: "or", },
        sma: { area_geografica: "or", },
        pia: { area_geografica: "am", },
        caq: { area_geografica: "am", },
        ini: { area_geografica: "am", },
        put: { area_geografica: "am", },
        pin: { area_geografica: "am", },
        yar: { area_geografica: "am", },
        ama: { area_geografica: "am", },
        iga: { area_geografica: "am", },
        apa: { area_geografica: "am", },
        mis: { area_geografica: "am", },
        gio: { area_geografica: "am", },
        cym: { area_geografica: "am", },

    };

    (function() {
        var svg = document.getElementById('mapa-regiones');
        var tooltip = svg.getElementById('tooltip');
        var tooltipText = tooltip.getElementsByTagName('text')[0];
        var tooltipRects = tooltip.getElementsByTagName('rect');
        var triggers = svg.getElementsByClassName('tooltip-trigger');

        for (var i = 0; i < triggers.length; i++) {
            //showTooltipEver(triggers[i],i);
            triggers[i].addEventListener('mousemove', showTooltip);
            triggers[i].addEventListener('mouseout', hideTooltip);
        }

        /*function showTooltipEver(elemento,i) {
            let coords = elemento.getBoundingClientRect();
var x_ = coords.left;
var y_ = coords.top;

var tooltip = svg.getElementById('tooltipe'+i);
            var CTM = svg.getScreenCTM();
            var x = (x_ - CTM.e) / CTM.a;
            var y = (y_ - CTM.f ) / CTM.d;
            console.log("width"+coords.width + " height"+coords.height);
            console.log("X_Cordenada-"+x_+" - y_Cordenada"+y_+" => x-Cordenada "+x+" y-Cordenada "+y);
            console.log("X_ope-"+(x+(coords.width/2))+" - y_ope"+(y+(coords.height/2))+" => x-Cordenada "+x+" y-Cordenada "+y);
            if (tooltip) {
                tooltip.setAttributeNS(null, "transform", "translate(" + ((x+(coords.width/2))-15) + " " +((y+(coords.height/2))-5) + ") rotate(-45)");
            tooltip.setAttributeNS(null, "visibility", "visible"); 
            }
           
        }*/
        function getOffset( el ) {
    var _x = 0;
    var _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
    return { top: _y, left: _x };
}
        function showTooltip(evt) {
            var CTM = svg.getScreenCTM();
            var x = (evt.clientX - CTM.e + 14) / CTM.a;
            var y = (evt.clientY - CTM.f + 20) / CTM.d;
            console.log("X-"+x+" - y-"+y);
            tooltip.setAttributeNS(null, "transform", "translate(" + x + " " + y + ")");
            tooltip.setAttributeNS(null, "visibility", "visible");
            tooltipText.firstChild.data = evt.target.getAttributeNS(null, "data-tooltip-text");
            var length = tooltipText.getComputedTextLength() + 10;
            for (var i = 0; i < tooltipRects.length; i++) {
                tooltipRects[i].setAttributeNS(null, "width", length + 'px');
            }
        }

        function hideTooltip(evt) {
            tooltip.setAttributeNS(null, "visibility", "hidden");
        }
    })();

    function toggle_selection( sel, val ){
        if($.inArray(val, $(`select[name="${sel}[]"]`).val()) === -1) {
            $('select[name="' + sel + '[]"] option[value=' + val + ']')
                .prop('selected', !$('select[name="' + sel + '[]"] option[value=' + val + ']').prop('selected'));
            $('select[name="' + sel + '[]"]').trigger('change');
        }
    }

    jQuery(document).ready(function(){
        $('.map').click(function(e){
            e.preventDefault();
            toggle_selection( 'area_geografica', regions[ $(this).attr('id') ].area_geografica );
            toggle_selection( 'sub_region_geografica', $(this).attr('id') );
            if($('#headingOne').parent().hasClass("collapsed") === true) {
                $('#headingOne').click();
            }
        });
    });
</script>
@endsection
