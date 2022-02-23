<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-home-circle mr-2"></i>@lang('translation.Dashboard') <div
                                class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                            <a href="{{url('admin/index')}}" class="dropdown-item">@lang('translation.Default')</a></a>
                            <a href="{{url('admin/dashboard-saas')}}" class="dropdown-item">@lang('translation.Saas')</a>
                            <a href="{{url('admin/dashboard-crypto')}}" class="dropdown-item">@lang('translation.Crypto')</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-tone mr-2"></i>@lang('translation.UI_Elements') <div class="arrow-down">
                            </div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{url('admin/ui-alerts')}}" class="dropdown-item">@lang('translation.Alerts')</a>
                                        <a href="{{url('admin/ui-buttons')}}" class="dropdown-item">@lang('translation.Buttons')</a>
                                        <a href="{{url('admin/ui-cards')}}" class="dropdown-item">@lang('translation.Cards')</a>
                                        <a href="{{url('admin/ui-carousel')}}" class="dropdown-item">@lang('translation.Carousel')</a>
                                        <a href="{{url('admin/ui-dropdowns')}}" class="dropdown-item">@lang('translation.Dropdowns')</a>
                                        <a href="{{url('admin/ui-grid')}}" class="dropdown-item">@lang('translation.Grid')</a>
                                        <a href="{{url('admin/ui-images')}}" class="dropdown-item">@lang('translation.Images')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{url('admin/ui-lightbox')}}" class="dropdown-item">@lang('translation.Lightbox')</a>
                                        <a href="{{url('admin/ui-modals')}}" class="dropdown-item">@lang('translation.Modals')</a>
                                        <a href="{{url('admin/ui-rangeslider')}}"
                                            class="dropdown-item">@lang('translation.Range_Slider')</a>
                                        <a href="{{url('admin/ui-session-timeout')}}"
                                            class="dropdown-item">@lang('translation.Session_Timeout')</a>
                                        <a href="{{url('admin/ui-progressbars')}}"
                                            class="dropdown-item">@lang('translation.Progress_Bars')</a>
                                        <a href="{{url('admin/ui-sweet-alert')}}"
                                            class="dropdown-item">@lang('translation.Sweet_Alert')</a>
                                        <a href="{{url('admin/ui-tabs-accordions')}}"
                                            class="dropdown-item">@lang('translation.Tabs_Accordions')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{url('admin/ui-typography')}}"
                                            class="dropdown-item">@lang('translation.Typography')</a>
                                        <a href="{{url('admin/ui-video')}}" class="dropdown-item">@lang('translation.Video')</a>
                                        <a href="{{url('admin/ui-general')}}" class="dropdown-item">@lang('translation.General')</a>
                                        <a href="{{url('admin/ui-colors')}}" class="dropdown-item">@lang('translation.Colors')</a>
                                        <a href="{{url('admin/ui-rating')}}" class="dropdown-item">@lang('translation.Rating')</a>
                                        <a href="{{url('admin/ui-notifications')}}"
                                            class="dropdown-item">@lang('translation.Notifications')</a>
                                        <a href="{{url('admin/ui-image-cropper')}}"
                                            class="dropdown-item">@lang('translation.Image_Cropper')</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-customize mr-2"></i>@lang('translation.Apps') <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="{{url('admin/calendar')}}" class="dropdown-item">@lang('translation.Calendar')</a>
                            <a href="{{url('admin/chat')}}"
                                class="dropdown-item">@lang('translation.Chat')</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Email') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="{{url('admin/email-inbox')}}" class="dropdown-item">@lang('translation.Inbox')</a>
                                    <a href="{{url('admin/email-read')}}" class="dropdown-item">@lang('translation.Read_Email')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Ecommerce') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="{{url('admin/ecommerce-products')}}" class="dropdown-item">@lang('translation.Products')</a>
                                    <a href="{{url('admin/ecommerce-product-detail')}}"
                                        class="dropdown-item">@lang('translation.Product_Detail')</a>
                                    <a href="{{url('admin/ecommerce-orders')}}" class="dropdown-item">@lang('translation.Orders')</a>
                                    <a href="{{url('admin/ecommerce-customers')}}"
                                        class="dropdown-item">@lang('translation.Customers')</a>
                                    <a href="{{url('admin/ecommerce-cart')}}" class="dropdown-item">@lang('translation.Cart')</a>
                                    <a href="{{url('admin/ecommerce-checkout')}}" class="dropdown-item">@lang('translation.Checkout')</a>
                                    <a href="{{url('admin/ecommerce-shops')}}" class="dropdown-item">@lang('translation.Shops')</a>
                                    <a href="{{url('admin/ecommerce-add-product')}}"
                                        class="dropdown-item">@lang('translation.Add_Product')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Crypto') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crypto">
                                    <a href="{{url('admin/crypto-wallet')}}" class="dropdown-item">@lang('translation.Wallet')</a>
                                    <a href="{{url('admin/crypto-buy-sell')}}" class="dropdown-item">@lang('translation.Buy_Sell')</a>
                                    <a href="{{url('admin/crypto-exchange')}}" class="dropdown-item">@lang('translation.Exchange')</a>
                                    <a href="{{url('admin/crypto-lending')}}" class="dropdown-item">@lang('translation.Lending')</a>
                                    <a href="{{url('admin/crypto-orders')}}" class="dropdown-item">@lang('translation.Orders')</a>
                                    <a href="{{url('admin/crypto-kyc-application')}}"
                                        class="dropdown-item">@lang('translation.KYC_Application')</a>
                                    <a href="{{url('admin/crypto-ico-landing')}}"
                                        class="dropdown-item">@lang('translation.ICO_Landing')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Projects') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="{{url('admin/projects-grid')}}" class="dropdown-item">@lang('translation.Projects_Grid')</a>
                                    <a href="{{url('admin/projects-list')}}" class="dropdown-item">@lang('translation.Projects_List')</a>
                                    <a href="{{url('admin/projects-overview')}}"
                                        class="dropdown-item">@lang('translation.Project_Overview')</a>
                                    <a href="{{url('admin/projects-create')}}" class="dropdown-item">@lang('translation.Create_New')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Tasks') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="{{url('admin/tasks-list')}}" class="dropdown-item">@lang('translation.Task_List')</a>
                                    <a href="{{url('admin/tasks-kanban')}}" class="dropdown-item">@lang('translation.Kanban_Board')</a>
                                    <a href="{{url('admin/tasks-create')}}" class="dropdown-item">@lang('translation.Create_Task')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Contacts') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="{{url('admin/contacts-grid')}}" class="dropdown-item">@lang('translation.User_Grid')</a>
                                    <a href="{{url('admin/contacts-list')}}" class="dropdown-item">@lang('translation.User_List')</a>
                                    <a href="{{url('admin/contacts-profile')}}" class="dropdown-item">@lang('translation.Profile')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-collection mr-2"></i>@lang('translation.Components') <div
                                class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Forms') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="{{url('admin/form-elements')}}" class="dropdown-item">@lang('translation.Elements')</a>
                                    <a href="{{url('admin/form-layouts')}}" class="dropdown-item">@lang('translation.Forms_Layouts')</a>
                                    <a href="{{url('admin/form-validation')}}" class="dropdown-item">@lang('translation.Validation')</a>
                                    <a href="{{url('admin/form-advanced')}}" class="dropdown-item">@lang('translation.Advanced')</a>
                                    <a href="{{url('admin/form-editors')}}" class="dropdown-item">@lang('translation.Editors')</a>
                                    <a href="{{url('admin/form-uploads')}}" class="dropdown-item">@lang('translation.File_Upload')</a>
                                    <a href="{{url('admin/form-xeditable')}}" class="dropdown-item">@lang('translation.X_editable')</a>
                                    <a href="{{url('admin/form-repeater')}}" class="dropdown-item">@lang('translation.Form_Repeater')</a>
                                    <a href="{{url('admin/form-wizard')}}" class="dropdown-item">@lang('translation.Wizard')</a>
                                    <a href="{{url('admin/form-mask')}}" class="dropdown-item">@lang('translation.Mask')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Tables') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="{{url('admin/tables-basic')}}" class="dropdown-item">@lang('translation.Basic_Tables')</a>
                                    <a href="{{url('admin/tables-datatable')}}"
                                        class="dropdown-item">@lang('translation.Data_Tables')</a>
                                    <a href="{{url('admin/tables-responsive')}}"
                                        class="dropdown-item">@lang('translation.Responsive_Table')</a>
                                    <a href="{{url('admin/tables-editable')}}"
                                        class="dropdown-item">@lang('translation.Editable_Table')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Charts') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="{{url('admin/charts-apex')}}" class="dropdown-item">@lang('translation.Apexcharts')</a>
                                    <a href="{{url('admin/charts-echart')}}" class="dropdown-item">@lang('translation.ECharts')</a>
                                    <a href="{{url('admin/charts-chartjs')}}" class="dropdown-item">@lang('translation.Chartjs')</a>
                                    <a href="{{url('admin/charts-flot')}}" class="dropdown-item">@lang('translation.Flot')</a>
                                    <a href="{{url('admin/charts-tui')}}" class="dropdown-item">@lang('translation.Toast_UI')</a>
                                    <a href="{{url('admin/charts-knob')}}" class="dropdown-item">@lang('translation.Jquery')</a>
                                    <a href="{{url('admin/charts-sparkline')}}" class="dropdown-item">@lang('translation.Sparkline')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Icons') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="{{url('admin/icons-boxicons')}}" class="dropdown-item">@lang('translation.Boxicons')</a>
                                    <a href="{{url('admin/icons-materialdesign')}}"
                                        class="dropdown-item">@lang('translation.Material_Design')</a>
                                    <a href="{{url('admin/icons-dripicons')}}" class="dropdown-item">@lang('translation.Dripicons')</a>
                                    <a href="{{url('admin/icons-fontawesome')}}"
                                        class="dropdown-item">@lang('translation.Font_awesome')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Maps') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="{{url('admin/maps-google')}}" class="dropdown-item">@lang('translation.Google_Maps')</a>
                                    <a href="{{url('admin/maps-vector')}}" class="dropdown-item">@lang('translation.Vector_Maps')</a>
                                    <a href="{{url('admin/maps-leaflet')}}" class="dropdown-item">@lang('translation.Leaflet_Maps')</a>
                                </div>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-file mr-2"></i>@lang('translation.Extra_Pages')<div class="arrow-down">
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Invoices') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="{{url('admin/invoices-list')}}" class="dropdown-item">@lang('translation.Invoice_List')</a>
                                    <a href="{{url('admin/invoices-detail')}}"
                                        class="dropdown-item">@lang('translation.Invoice_Detail')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Authentication')<div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="{{url('admin/auth-login')}}" class="dropdown-item">@lang('translation.Login')</a>
                                    <a href="{{url('admin/auth-register')}}" class="dropdown-item">@lang('translation.Register')</a>
                                    <a href="{{url('admin/auth-recoverpw')}}"
                                        class="dropdown-item">@lang('translation.Recover_Password')</a>
                                    <a href="{{url('admin/auth-lock-screen')}}"
                                        class="dropdown-item">@lang('translation.Lock_screen')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Utility') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="{{url('admin/pages-starter')}}" class="dropdown-item">@lang('translation.Starter_Page')</a>
                                    <a href="{{url('admin/pages-maintenance')}}"
                                        class="dropdown-item">@lang('translation.Maintenance')</a>
                                    <a href="{{url('admin/pages-comingsoon')}}"
                                        class="dropdown-item">@lang('translation.Coming_Soon')</a>
                                    <a href="{{url('admin/pages-timeline')}}" class="dropdown-item">@lang('translation.Timeline')</a>
                                    <a href="{{url('admin/pages-faqs')}}" class="dropdown-item">@lang('translation.FAQs')</a>
                                    <a href="{{url('admin/pages-pricing')}}" class="dropdown-item">@lang('translation.Pricing')</a>
                                    <a href="{{url('admin/pages-404')}}" class="dropdown-item">@lang('translation.Error_404')</a>
                                    <a href="{{url('admin/pages-500')}}" class="dropdown-item">@lang('translation.Error_500')</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-layout mr-2"></i>@lang('translation.Layouts')<div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                            <a href="{{url('admin/layouts-horizontal')}}" class="dropdown-item">@lang('translation.Horizontal')</a>
                            <a href="{{url('admin/index')}}" class="dropdown-item">@lang('translation.Vertical')</a>
                            <a href="{{url('admin/layouts-topbar-light')}}" class="dropdown-item">@lang('translation.Topbar_Light')</a>
                            <a href="{{url('admin/layouts-boxed-horizontal')}}" class="dropdown-item">@lang('translation.Boxed_Width')</a>
                            <a href="{{url('admin/layouts-horizontal-preloader')}}" class="dropdown-item">@lang('translation.Preloader')</a>
                            <a href="{{url('admin/layouts-colored-topbar')}}" class="dropdown-item">@lang('translation.Colored_Topbar')</a>
                            <a href="{{url('admin/layouts-scrollable-horizontal')}}" class="dropdown-item">@lang('translation.Scrollable')</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
