<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laika Mascotas - Universo Peludo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="assets/css/styles.css" >
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
        <!-- Scripts -->    
	
    <script src="node_modules\bootstrap\dist\css\bootstrap.css"></script> 
    </head>
    <body class="antialiased">

        <!-- Barra superior -->

    <div id="DIV_42">
        <div id="DIV_43">
            <div id="DIV_44">
                <span id="SPAN_45"><img src="assets/home/compras.svg" id="IMG_46" alt="" /> Compras seguras online</span>
                <span id="SPAN_47"><img src="assets/home/pagos.svg" id="IMG_48" alt="" /> Pago contra entrega</span>
                <span id="SPAN_49"><img src="assets/home/entregas.svg" id="IMG_50" alt="" /> Entregas el mismo día</span>
            </div>
            <div id="DIV_51">
                <span id="SPAN_52"></span>
                <div id="DIV_53">
                Llámanos &nbsp; +573009108496
                </div>
                <a href="mailto:servicioclientes@laika.com.co?Subject=Hola%20Laika" id="A_54"><span id="SPAN_55">Escríbenos</span></a>
                <a href="https://www.youtube.com/watch?v=gchln4oix68" target="_blank" id="A_56">
                    <span id="SPAN_57"><img src="assets/home/youtube.svg" id="IMG_58" alt="" /></span>
                </a>
                <a href="https://es-la.facebook.com/LaikaUniverso/" target="_blank" id="A_59">
                    <span id="SPAN_60"><img src="assets/home/facebook.svg" id="IMG_61" alt="" /></span>
                </a>
                <a href="https://www.instagram.com/laikamascotas/?hl=es-la" target="_blank" id="A_59">
                    <span id="SPAN_63"><img src="assets/home/instagram.svg" id="IMG_61" alt="" /></span>
                </a>
            </div>
        </div>
    </div>

        <!-- Menu Navegacion -->

    <nav id="NAV_68">
        <div id="DIV_69">
            <div id="DIV_70">
                <div id="DIV_71">
                    <div id="DIV_72">
                            <div id="DIV_79">
                        <div id="DIV_85">
                            <div id="DIV_86">
                                <div id="DIV_87">
                                    <a id="A_88"></a>
                                    <div id="DIV_89">
                                        <span id="SPAN_90"><img src="assets/home/perro-menu.svg" width="40" id="IMG_91" alt="" /></span> <span id="SPAN_92">Perro</span> <span id="SPAN_93"><i id="I_94"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="DIV_509">
                    <div id="DIV_510">
                        <div id="DIV_511">
                            <div id="DIV_512">
                                Agregar dirección
                            </div>
                            <div id="DIV_513">
                                <img src="https://laika.com.co/assets/home/arrow_down_custom.svg" id="IMG_514" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div id="DIV_515">
                    <div id="DIV_516">
                        <button type="button" id="BUTTON_517"><span id="SPAN_518">Crear cuenta</span></button>
                    </div>
                </div>
                <div id="DIV_526">
                    <div id="DIV_527">
                        <div id="DIV_529">
                            <img src="assets/home/carrito.svg" id="IMG_530" alt="" />
                        </div>
                        <span id="SPAN_531">0</span>

                    </div>
                </div>
            </div>
            <div id="DIV_553">
                <div id="DIV_554">
                    <div id="DIV_555">
                        <a href="https://laika.com.co/city/bog/dog" id="A_556"><img src="assets/home/logo.svg" id="IMG_557" alt="" /></a>
                    </div>
                </div>
                <div id="DIV_558">
                    <img src="https://laika.com.co/assets/home/search_icon_mc.svg" id="IMG_559" alt="" /><img src="https://laika.com.co/assets/home/times_mc.svg" id="IMG_560" alt="" />
                    <input type="text" name="autocomplete_search" id="INPUT_561" placeholder="¿Qué necesita tu mascota?" />
                </div>
            </div>
        </div>
    </div>

      <!-- Barra de opciones -->

            <div id="DIV_564">
                <div id="DIV_565">
                    <div id="DIV_566">
                        <span id="SPAN_567"><img width="30" src="assets/home/perro-menu.svg" id="IMG_568" alt="" /> <span id="SPAN_569">Perro</span></span>
                        <div id="DIV_570">
                            <img src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg" alt="" id="IMG_571" />
                        </div>
                    </div>
                </div>
                <div id="DIV_660">
                    <div id="DIV_661">
                        <span id="SPAN_662"><img width="30" src="assets/home/gato-menu.svg" id="IMG_663" alt="" /> <span id="SPAN_664">Gato</span></span>
                        <div id="DIV_665">
                            <img src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg" alt="" id="IMG_666" />
                        </div>
                    </div>
                </div>
                <a id="A_753"></a>
                <div id="DIV_754">
                    Servicios
                    <div id="DIV_755">
                        <img src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg" alt="" id="IMG_756" />
                    </div>
                </div>
                
                <a id="A_769"></a>
                <div id="DIV_770">
                    Promociones
                </div>
                <a href="https://blog.laika.com.co/" id="A_771"></a>
                <div id="DIV_772">
                    Blog
                </div>
                <div id="DIV_773">
                    <img width="160" height="20" src="assets/home/logo-vetcare.png" id="IMG_774" alt="" />
                </div>
                <div id="DIV_775">
                    <img width="160" src="assets/home/logo-member.png" id="IMG_776" alt="" />
                </div>
            </div>
        </div>
    </div>
</nav>

    <!-- Banner -->

<div id="DIV_778" style="margin-top: 8px;">
    <main id="MAIN_796">
        <div id="DIV_797">
            <input type="hidden" id="INPUT_798" />
            <div id="DIV_799">
                <div id="DIV_800">
                    <div id="DIV_806">
                        <button id="BUTTON_807"></button>
                        <button id="BUTTON_808"></button>
                        <button id="BUTTON_809"></button>
                        <button id="BUTTON_810"></button>
                        <button id="BUTTON_811"></button>
                        <button id="BUTTON_812"></button>
                    </div>
                    <div id="DIV_814">slide <span id="SPAN_815">6</span> of 7</div>
                    <div id="DIV_816">
                        <div id="DIV_817">
                            <div id="DIV_818">
                                <div id="DIV_819">
                                        <img src="assets/home/Banner01.jpg" alt="" id="IMG_821" />
                                </div>
                                <div id="DIV_823">
                                        <img src="assets/home/Banner02.jpg" alt="" id="IMG_825"/>
                                </div>
                                <div id="DIV_827">
                                        <img src="assets/home/Banner03.jpg" alt="" id="IMG_829" />
                                </div>
                                <div id="DIV_831">
                                        <img src="assets/home/Banner04.jpg" alt="" id="IMG_833" />
                                </div>
                                <div id="DIV_835">
                                        <img src="assets/home/Banner05.png" alt="" id="IMG_837" />
                                </div>
                                <div id="DIV_839">
                                        <img src="assets/home/Banner06.jpg" alt="" id="IMG_841" />
                                </div>
                                <div id="DIV_843">
                                        <img src="assets/home/Banner07.jpg" alt="" id="IMG_845" />
                                </div>
                                <div id="DIV_847">
                                        <img src="assets/home/Banner08.jpg"" alt="" id="IMG_849" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


    <!-- Categorias -->
     
<div id="DIV_855" style="margin-top: -2700px;">
    <div id="DIV_856">
        <h2 id="title-categoria">Categorías</h2>
        <div id="DIV_858">
            <div id="DIV_859">
                <div id="DIV_860">
 
                        <li id="LI_862">
                            <div id="DIV_863">
                                <div id="DIV_864">
                                    <img src="assets/home/categoria01.png"" id="IMG_865" alt="" />
                                </div>
                                <h3 id="H3_866">
                                    Alimento
                                </h3>
                            </div>
                        </li>
                        <li id="LI_867">
                            <div id="DIV_868">
                                <div id="DIV_869">
                                    <img src="assets/home/categoria02.png" id="IMG_870" alt="" />
                                </div>
                                <h3 id="H3_871">
                                    Snacks
                                </h3>
                            </div>
                        </li>
                        <li id="LI_872">
                            <div id="DIV_873">
                                <div id="DIV_874">
                                    <img src="assets/home/categoria03.png" id="IMG_875" alt="" />
                                </div>
                                <h3 id="H3_876">
                                    Farmapet
                                </h3>
                            </div>
                        </li>
                        <li id="LI_877">
                            <div id="DIV_878">
                                <div id="DIV_879">
                                    <img src="assets/home/categoria04.png" id="IMG_880" alt="" />
                                </div>
                                <h3 id="H3_881">
                                    Cuidado e Higiene
                                </h3>
                            </div>
                        </li>
                        <li id="LI_882">
                            <div id="DIV_883">
                                <div id="DIV_884">
                                    <img src="assets/home/categoria05.png" id="IMG_885" alt="" />
                                </div>
                                <h3 id="H3_886">
                                    Juguetes
                                </h3>
                            </div>
                        </li>
                        <li id="LI_887">
                            <div id="DIV_888">
                                <div id="DIV_889">
                                    <img src="assets/home/categoria06.png" id="IMG_890" alt="" />
                                </div>
                                <h3 id="H3_891">
                                    Accesorios
                                </h3>
                            </div>
                        </li>
                        <li id="LI_892">
                            <div id="DIV_893">
                                <div id="DIV_894">
                                    <img src="assets/home/categoria07.png" id="IMG_895" alt="" />
                                </div>
                                <h3 id="H3_896">
                                    Para PetLovers
                                </h3>
                            </div>
                        </li>
                    </ul>
                    <div id="DIV_897"><a id="A_898"></a><a id="A_899"></a></div>
                </div>
                <ul id="UL_900">
                    <li id="LI_901">
                        <a href="https://laika.com.co/#" id="A_902">1</a>
                    </li>
                    <li id="LI_903">
                        <a href="https://laika.com.co/#" id="A_904">2</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="DIV_905">
    <h2 id="H2_906">
        Encuentra todo para tus peludos en un solo lugar
    </h2>
    <div id="DIV_907">
        <div id="DIV_908">
            <div id="DIV_909">
                <div id="DIV_910">
                    <img height="62" alt="" src="https://laika.com.co/assets/home/delivery.png" id="IMG_911" />
                </div>
                <h3 id="H3_912">
                    Entregas el mismo día
                </h3>
                <h4 id="H4_913">
                    Entregamos todo lo que necesitas, cuando lo necesitas
                </h4>
            </div>
            <div id="DIV_914">
                <div id="DIV_915">
                    <img height="62" alt="" src="https://laika.com.co/assets/home/secure_payment.png" id="IMG_916" />
                </div>
                <h3 id="H3_917">
                    Pago online o contra entrega
                </h3>
                <h4 id="H4_918">
                    Escoge tu método de pago.¡No te preocupes! contamos con pasarelas de pagos certificadas y seguras
                </h4>
            </div>
            <div id="DIV_919">
                <div id="DIV_920">
                    <img height="62" alt="" src="https://laika.com.co/assets/home/all_for_pets.png" id="IMG_921" />
                </div>
                <h3 id="H3_922">
                    Todo lo que necesitas
                </h3>
                <h4 id="H4_923">
                    Contamos con más de 4.000 productos y servicios. Encuentra todo lo que necesitas para tu peludo
                </h4>
            </div>
        </div>
    </div>
</div>

    <!-- Marcas  -->

<div id="DIV_924">
    <h2 id="H2_925">
        ¡Más de 100 marcas disponibles!
    </h2>
    <div id="DIV_926">
        <div id="DIV_927">
            <img src="assets/home/marca01.jpg" id="IMG_928" alt="" />
        </div>
        <div id="DIV_929">
            <img src="assets/home/marca02.png" id="IMG_930" alt="" />
        </div>
        <div id="DIV_931">
            <img src="assets/home/marca03.png" id="IMG_932" alt="" />
        </div>
        <div id="DIV_933">
            <img src="assets/home/marca04.png" id="IMG_934" alt="" />
        </div>
        <div id="DIV_935">
            <img src="assets/home/marca05.png" id="IMG_936" alt="" />
        </div>
        <div id="DIV_937">
            <img src="assets/home/marca06.png" id="IMG_938" alt="" />
        </div>
        <div id="DIV_939">
            <img src="assets/home/marca07.png" id="IMG_940" alt="" />
        </div>
        <div id="DIV_941">
            <img src="assets/home/marca08.png" id="IMG_942" alt="" />
        </div>
    </div>
</div>

    <!-- Productos  -->

<div id="DIV_943" style="margin-top: 20px;">
    <h2 id="title-products">Un universo lleno de ofertas</h2>
    <div id="DIV_945">
        <div id="DIV_946">
            <div id="DIV_947">
                    <li id="LI_949">
                        <div id="DIV_950">
                            <span id="SPAN_951"></span>
                            <div id="DIV_952"></div>
                            <div id="DIV_953">
                                <span id="SPAN_954"><img width="70" src="assets/home/estrella-productos.svg"" id="IMG_955" alt="" /></span>
                                <div id="DIV_956">
                                    10%
                                </div>
                                <div id="DIV_957">
                                    DESCUENTO
                                </div>
                                <div id="DIV_958">
                                        <img id="IMG_960" alt="Guaumor Adultos Razas Medianas Y Grandes" src="assets/home/producto01.png" />
                                </div>
                                <div id="DIV_961">
                                    <a href="https://laika.com.co/product_details/bog/guaumor-adultos-razas-medianas-y-grandes/dog" id="A_962"></a>
                                    <h3 id="H3_963">
                                        Guaumor Adultos Razas Medianas Y Grandes
                                    </h3>
                                    <p id="P_964"><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i></i></p>
                                    <p id="P_970">
                                        <span id="SPAN_971">
                                            <span id="SPAN_972">$15.525</span>
                                            <span id="SPAN_973">
                                                <span id="SPAN_974">Antes</span><br id="BR_975" />
                                                $17.250
                                            </span>
                                            <span id="SPAN_977">
                                                <span id="SPAN_978"><span id="SPAN_979">$13.800</span></span>
                                                <span id="SPAN_980">
                                                    <img width="80" src="assets/home/precio-img.svg"" id="IMG_981" alt="" />
                                                    <button id="BUTTON_982">
                                                        ADQUIÉRELA YA
                                                    </button>
                                                </span>
                                            </span>
                                        </span>
                                        <span id="SPAN_983"><span id="SPAN_984"></span></span>
                                    </p>
                                    <div id="DIV_985">
                                        <div id="DIV_986">
                                            <input
                                                type="radio"
                                                id="INPUT_987"
                                                name="dog_299_GuaumorAdultosRazasMedianasYGrandes"
                                                value='{"id":1408,"sku":"7703095933286","sale_price":17250,"price_with_discount":15525,"reference":"2 KG","stock":6,"show_first":true,"is_member":false,"saving_member":1725,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":13800},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1408_GUAUMOR_ADULTOS_RAZAS_MEDIANAS_Y_GRANDES_1595873157_1000x1000.png"},{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1408_GUAUMOR_ADULTOS_RAZAS_MEDIANAS_Y_GRANDES_1595873194_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_988">
                                                <label for="dog_1408" id="LABEL_989">
                                                    2 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_990">
                                            <input
                                                type="radio"
                                                id="INPUT_991"
                                                name="dog_299_GuaumorAdultosRazasMedianasYGrandes"
                                                value='{"id":1409,"sku":"7703095933385","sale_price":63250,"price_with_discount":56925,"reference":"8 KG","stock":13,"show_first":false,"is_member":false,"saving_member":6325,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":50600},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1409_GUAUMOR_ADULTOS_RAZAS_MEDIANAS_Y_GRANDES_1595873231_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_992">
                                                <label for="dog_1409" id="LABEL_993">
                                                    8 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_994">
                                            <input
                                                type="radio"
                                                id="INPUT_995"
                                                name="dog_299_GuaumorAdultosRazasMedianasYGrandes"
                                                value='{"id":15415,"sku":"7703095933200","sale_price":122600,"price_with_discount":110340,"reference":"17 KG","stock":8,"show_first":false,"is_member":false,"saving_member":12260,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":98080},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/15415_GUAUMOR_ADULTOS_RAZAS_MEDIANAS_Y_GRANDES_1595873443_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_996">
                                                <label for="dog_15415" id="LABEL_997">
                                                    17 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_998">
                                            <input
                                                type="radio"
                                                id="INPUT_999"
                                                name="dog_299_GuaumorAdultosRazasMedianasYGrandes"
                                                value='{"id":15417,"sku":"7703095933231","sale_price":163750,"price_with_discount":147375,"reference":"25 KG","stock":20,"show_first":false,"is_member":false,"saving_member":16375,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":131000},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/15417_GUAUMOR_ADULTOS_RAZAS_MEDIANAS_Y_GRANDES_1595873573_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1000">
                                                <label for="dog_15417" id="LABEL_1001">
                                                    25 KG
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="DIV_1002">
                                    <div id="DIV_1003">
                                        <button type="submit" id="BUTTON_1004">
                                            Agregar al carrito
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="LI_1005">
                        <div id="DIV_1006">
                            <span id="SPAN_1007"></span>
                            <div id="DIV_1008"></div>
                            <div id="DIV_1009">
                                <span id="SPAN_1010"><img width="70" src="https://laika.com.co/assets/star.svg" id="IMG_1011" alt="" /></span>
                                <div id="DIV_1012">
                                    10%
                                </div>
                                <div id="DIV_1013">
                                    DESCUENTO
                                </div>
                                <div id="DIV_1014">
                                        <img id="IMG_1016" alt="Guaumor Cachorros Razas Medianas Y Grandes" src="assets/home/producto02.png"/>
                                </div>
                                <div id="DIV_1017">
                                    <h3 id="H3_1019">
                                        Guaumor Cachorros Razas Medianas Y Grandes
                                    </h3>
                                    <p id="P_1020"><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i></i></p>
                                    <p id="P_1026">
                                        <span id="SPAN_1027">
                                            <span id="SPAN_1028">$124.785</span>
                                            <span id="SPAN_1029">
                                                <span id="SPAN_1030">Antes</span><br id="BR_1031" />
                                                $138.650
                                            </span>
                                            <span id="SPAN_1033">
                                                <span id="SPAN_1034"><span id="SPAN_1035">$110.920</span></span>
                                                <span id="SPAN_1036">
                                                    <img width="80" src="assets/home/precio-img.svg" id="IMG_1037" alt="" />
                                                    <button id="BUTTON_1038">
                                                        ADQUIÉRELA YA
                                                    </button>
                                                </span>
                                            </span>
                                        </span>
                                        <span id="SPAN_1039"><span id="SPAN_1040"></span></span>
                                    </p>
                                    <div id="DIV_1041">
                                        <div id="DIV_1042">
                                            <input
                                                type="radio"
                                                id="INPUT_1043"
                                                name="dog_297_GuaumorCachorrosRazasMedianasYGrandes"
                                                value='{"id":15411,"sku":"7703095933125","sale_price":138650,"price_with_discount":124785,"reference":"17 KG","stock":1,"show_first":true,"is_member":false,"saving_member":13865,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":110920},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/15411_GUAUMOR_CACHORROZ_RAZAS_MEDIANAS_Y_GRANDES_1595872452_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1044">
                                                <label for="dog_15411" id="LABEL_1045">
                                                    17 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_1046">
                                            <input
                                                type="radio"
                                                id="INPUT_1047"
                                                name="dog_297_GuaumorCachorrosRazasMedianasYGrandes"
                                                value='{"id":15413,"sku":"7703095933132","sale_price":168550,"price_with_discount":151695,"reference":"25 KG","stock":6,"show_first":false,"is_member":false,"saving_member":16855,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":134840},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/15413_GUAUMOR_CACHORROZ_RAZAS_MEDIANAS_Y_GRANDES_1595872598_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1048">
                                                <label for="dog_15413" id="LABEL_1049">
                                                    25 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_1050">
                                            <input
                                                type="radio"
                                                id="INPUT_1051"
                                                name="dog_297_GuaumorCachorrosRazasMedianasYGrandes"
                                                value='{"id":1396,"sku":"7703095933279","sale_price":18300,"price_with_discount":16470,"reference":"2 KG","stock":3,"show_first":false,"is_member":false,"saving_member":1830,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":14640},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1396_GUAUMOR_CACHORROZ_RAZAS_MEDIANAS_Y_GRANDES_1595872775_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1052">
                                                <label for="dog_1396" id="LABEL_1053">
                                                    2 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_1054">
                                            <input
                                                type="radio"
                                                id="INPUT_1055"
                                                name="dog_297_GuaumorCachorrosRazasMedianasYGrandes"
                                                value='{"id":1397,"sku":"7703095933378","sale_price":65900,"price_with_discount":59310,"reference":"8 KG","stock":5,"show_first":false,"is_member":false,"saving_member":6590,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":52720},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1397_GUAUMOR_CACHORROZ_RAZAS_MEDIANAS_Y_GRANDES_1595872878_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1056">
                                                <label for="dog_1397" id="LABEL_1057">
                                                    8 KG
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="DIV_1058">
                                    <div id="DIV_1059">
                                        <button type="submit" id="BUTTON_1060">
                                            Agregar al carrito
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="LI_1061">
                        <div id="DIV_1062">
                            <span id="SPAN_1063"></span>
                            <div id="DIV_1064"></div>
                            <div id="DIV_1065">
                                <span id="SPAN_1066"><img width="70" src="https://laika.com.co/assets/star.svg" id="IMG_1067" alt="" /></span>
                                <div id="DIV_1068">
                                    10%
                                </div>
                                <div id="DIV_1069">
                                    DESCUENTO
                                </div>
                                <div id="DIV_1070">
                                        <img id="IMG_1072" alt="Guaumor Cachorros Razas Pequeñas" src="assets/home/producto03.png"" />
                                </div>
                                <div id="DIV_1073">
                                    <a href="https://laika.com.co/product_details/bog/guaumor-cachorros-razas-pequenas/dog" id="A_1074"></a>
                                    <h3 id="H3_1075">
                                        Guaumor Cachorros Razas Pequeñas
                                    </h3>
                                    <p id="P_1076"><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i><i id="star1">★</i></i></p>
                                    <p id="P_1082">
                                        <span id="SPAN_1083">
                                            <span id="SPAN_1084">$18.360</span>
                                            <span id="SPAN_1085">
                                                <span id="SPAN_1086">Antes</span><br id="BR_1087" />
                                                $20.400
                                            </span>
                                            <span id="SPAN_1089">
                                                <span id="SPAN_1090"><span id="SPAN_1091">$16.320</span></span>
                                                <span id="SPAN_1092">
                                                    <img width="80" src="assets/home/precio-img.svg" id="IMG_1093" alt="" />
                                                    <button id="BUTTON_1094">
                                                        ADQUIÉRELA YA
                                                    </button>
                                                </span>
                                            </span>
                                        </span>
                                        <span id="SPAN_1095"><span id="SPAN_1096"></span></span>
                                    </p>
                                    <div id="DIV_1097">
                                        <div id="DIV_1098">
                                            <input
                                                type="radio"
                                                id="INPUT_1099"
                                                name="dog_296_GuaumorCachorrosRazasPequeñas"
                                                value='{"id":1391,"sku":"7703095933224","sale_price":20400,"price_with_discount":18360,"reference":"2 KG","stock":2,"show_first":true,"is_member":false,"saving_member":2040,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":16320},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1391_GUAUMOR_CACHORROS_RAZAS_PEQUE%C3%91AS_1595871499_1000x1000.png"},{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1391_GUAUMOR_CACHORROS_RAZAS_PEQUE%C3%91AS_1595871517_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1100">
                                                <label for="dog_1391" id="LABEL_1101">
                                                    2 KG
                                                </label>
                                            </span>
                                        </div>
                                        <div id="DIV_1102">
                                            <input
                                                type="radio"
                                                id="INPUT_1103"
                                                name="dog_296_GuaumorCachorrosRazasPequeñas"
                                                value='{"id":1392,"sku":"7703095933361","sale_price":72500,"price_with_discount":65250,"reference":"8 KG","stock":1,"show_first":false,"is_member":false,"saving_member":7250,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":58000},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/1392_GUAUMOR_CACHORROS_RAZAS_PEQUE%C3%91AS_1595871542_1000x1000.png"}]}'
                                            />
                                            <span id="SPAN_1104">
                                                <label for="dog_1392" id="LABEL_1105">
                                                    8 KG
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="DIV_1106">
                                    <div id="DIV_1107">
                                        <button type="submit" id="BUTTON_1108">
                                            Agregar al carrito
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="LI_1109">
                        <div id="DIV_1110">
                            <span id="SPAN_1111"></span>
                            <div id="DIV_1112"></div>
                            <div id="DIV_1113">
                                <span id="SPAN_1114"><img width="70" src="https://laika.com.co/assets/star.svg" id="IMG_1115" alt="" /></span>
                                <div id="DIV_1116">
                                    10%
                                </div>
                                <div id="DIV_1117">
                                    DESCUENTO
                                </div>
                                <div id="DIV_1118">
                                    <a href="https://laika.com.co/product_details/bog/furminator-shampoo-ultra-premium-perro/dog" id="A_1119">
                                        <img id="IMG_1120" alt="FURMINATOR Shampoo Ultra Premium perro" src="https://laikapp.s3.amazonaws.com/dev_images_products/75809_FURMINATOR_Shampoo_Ultra_Premium_perro_1645823159_0_500x500.png" />
                                    </a>
                                </div>
                                <div id="DIV_1121">
                                    <a href="https://laika.com.co/product_details/bog/furminator-shampoo-ultra-premium-perro/dog" id="A_1122"></a>
                                    <h3 id="H3_1123">
                                        FURMINATOR Shampoo Ultra Premium perro
                                    </h3>
                                    <p id="P_1124"><i id="I_1125"></i><i id="I_1126"></i><i id="I_1127"></i><i id="I_1128"></i><i id="I_1129"></i></p>
                                    <p id="P_1130">
                                        <span id="SPAN_1131">
                                            <span id="SPAN_1132">$30.100</span>
                                            <span id="SPAN_1133">
                                                <span id="SPAN_1134">Antes</span><br id="BR_1135" />
                                                $33.444
                                            </span>
                                            <span id="SPAN_1137">
                                                <span id="SPAN_1138"><span id="SPAN_1139">$26.755</span></span>
                                                <span id="SPAN_1140">
                                                    <img width="80" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_1141" alt="" />
                                                    <button id="BUTTON_1142">
                                                        ADQUIÉRELA YA
                                                    </button>
                                                </span>
                                            </span>
                                        </span>
                                        <span id="SPAN_1143"><span id="SPAN_1144"></span></span>
                                    </p>
                                    <div id="DIV_1145">
                                        <div id="DIV_1146">
                                            <input
                                                type="radio"
                                                id="INPUT_1147"
                                                name="dog_12396_FURMINATORShampooUltraPremiumperro"
                                                value='{"id":75809,"sku":"811794013073","sale_price":33444,"price_with_discount":30100,"reference":"473 MILILITRO","stock":1,"show_first":true,"is_member":false,"saving_member":3345,"status_id":1,"can_request_notification":true,"laika_coins":null,"laika_member":{"membership":{"fullname":null,"id":7,"name":"Membres\u00eda Laika","benefits":"15% de descuento en todos los productos para tu peludo\n15% de descuento en veterinario a domicilio\nPor cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos\n120000Domicilio\nKit de regalo\n15% de descuento sobre servicios vetcare.\nL\u00ednea de asesor\u00eda veterinaria gratuita 3009108496","value":"50000","image":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_general\/162931482916185897721615506516membresia.png","acquired":null,"start_date":null,"final_date":null,"total_monthly_savings_member":null,"total_savings_member":0,"value_monthly":4167,"kit":null,"membership_variables":[{"variable":{"id":1,"name":"% de descuento en todos los productos para tu peludo"},"variable_id":1,"value":"15","is_primary":1},{"variable":{"id":12,"name":"% de descuento en veterinario a domicilio"},"variable_id":12,"value":"15","is_primary":2},{"variable":{"id":6,"name":"Por cada pedido Laika donar\u00e1 a una fundaci\u00f3n para los peludos"},"variable_id":6,"value":"0","is_primary":2},{"variable":{"id":0,"name":"Domicilio"},"variable_id":0,"value":"120000","is_primary":1},{"variable":{"id":23,"name":"Kit de regalo"},"variable_id":23,"value":"0","is_primary":2},{"variable":{"id":11,"name":"% de descuento sobre servicios vetcare."},"variable_id":11,"value":"15","is_primary":2},{"variable":{"id":24,"name":"L\u00ednea de asesor\u00eda veterinaria gratuita 3009108496"},"variable_id":24,"value":"0","is_primary":2}]},"price":26755},"promotion":{"value":10},"reference_images":[{"url":"https:\/\/laikapp.s3.amazonaws.com\/dev_images_products\/75809_FURMINATOR_Shampoo_Ultra_Premium_perro_1645823159_0_500x500.png"}]}'
                                            />
                                            <span id="SPAN_1148">
                                                <label for="dog_75809" id="LABEL_1149">
                                                    473 MILILITRO
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="DIV_1150">
                                    <div id="DIV_1151">
                                        <button type="submit" id="BUTTON_1152">
                                            Agregar al carrito
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="DIV_1153"><a id="A_1154"></a><a id="A_1155"></a></div>
            </div>
            <ul id="UL_1156">
                <li id="LI_1157">
                    <a href="https://laika.com.co/#" id="A_1158">1</a>
                </li>
                <li id="LI_1159">
                    <a href="https://laika.com.co/#" id="A_1160">2</a>
                </li>
            </ul>
        </div>
    </div>
</div>

    <!-- Publicidad -->

<div id="DIV_1299">
    <div id="DIV_1300">
        <div id="DIV_1301">
            <p id="P_1302">Para una mejor <strong id="STRONG_1303">experiencia</strong> para ti y tu <strong id="STRONG_1304">peludo descarga la app.</strong></p>
            <div id="DIV_1305">
                <a href="https://itunes.apple.com/co/app/laika/id1325285117?mt=8" id="A_1306"><img src="assets/home/huawei-store.webp" id="IMG_1307" alt="" /></a>
                <a href="https://play.google.com/store/apps/details?id=com.kubo.laika" id="A_1308"><img src="assets/home/google-play-store.webp" id="IMG_1309" alt="" /></a>
                <a href="https://appgallery5.huawei.com/#/app/C101252007" id="A_1310"><img src="assets/home/app-store.webp" id="IMG_1311" alt="" /></a>
            </div>
        </div>
        <div id="DIV_1312">
            <img src="assets/home/movil-publi.webp" id="IMG_1313" alt="" />
        </div>
    </div>
</div>

   <!-- Footer -->

<div id="DIV_1314">
    <div id="DIV_1315">
        <div id="DIV_1316">
            <div id="DIV_1317">
                <span id="SPAN_1318"><img src="assets/home/logo-footer.webp" id="IMG_1319" alt="" /></span>
                <p id="P_1321">
                     <span><img src="assets/home/redes-footer.png" alt="" /></span>
                </p>
            </div>
            <div id="DIV_1331">
                <h2 id="H2_1332">
                    ACERCA DE LAIKA
                </h2>
                <a href="https://laika.com.co/about_us/bog" id="A_1333"></a>
                <h3 id="H3_1334">
                    Sobre Laika
                </h3>
                <a href="https://laika.com.co/services/bog/dog" id="A_1335"></a>
                <h3 id="H3_1336">
                    Servicios
                </h3>
                <a href="https://jobs.airavirtual.com/laika" id="A_1337"></a>
                <h3 id="H3_1338">
                    Trabaja con nosotros
                </h3>
                <a href="https://blog.laika.com.co/" id="A_1339"></a>
                <h3 id="H3_1340">
                    Blog
                </h3>
                <a href="https://laika.com.co/terms_conditions/bog" id="A_1341"></a>
                <h3 id="H3_1342">
                    Términos y condiciones
                </h3>
            </div>
            <div id="DIV_1343">
                <h2 id="H2_1344">
                    LINKS DE INTERÉS
                </h2>
                <a href="https://laika.com.co/frequent_questions/bog" id="A_1345"></a>
                <h3 id="H3_1346">
                    Preguntas frecuentes
                </h3>
                <h3 id="H3_1347">
                    ¿Cómo comprar en Laika?
                </h3>
                <a href="https://laika.com.co/privacy_policies/bog" id="A_1348"></a>
                <h3 id="H3_1349">
                    Política de Privacidad
                </h3>
                <h3 id="H3_1350">
                    Contáctanos
                </h3>
                <a href="https://laika.com.co/delivery_policies/bog" id="A_1351"></a>
                <h3 id="H3_1352">
                    Políticas de Entrega
                </h3>
            </div>
            <div id="DIV_1353">
                <h2 id="H2_1354">
                    INFORMACIÓN
                </h2>
                <h3 id="H3_1355">
                    Teléfono: +573009108496<br id="BR_1356" />
                    <br id="BR_1357" />
                    servicioclientes@laika.com.co<br id="BR_1358" />
                    <br id="BR_1359" />
                    Bogotá D.C., Colombia
                </h3>
            </div>
            <div id="DIV_1360">
                <h2 id="H2_1361">
                    SUSCRÍBETE
                </h2>
                <h3 id="H3_1362">
                    Recibe noticias y promociones al instante.
                </h3>
                <form action="https://laika.com.co/form-group%20mt-0" id="FORM_1363">
                    <div id="DIV_1364">
                        <input type="email" placeholder="Correo electrónico" id="INPUT_1365" />
                        <button type="button" id="BUTTON_1366">
          
                        </button>
                    </div>
                    <div id="DIV_1369">
                        <input id="input-check" type="checkbox" name="check_notifications" />
                        <label id="terminos-check"> He leído y acepto las <a href="https://laika.com.co/privacy_policies/bog" id="A_1372">políticas de privacidad.</a> </label>
                    </div>
                </form>
            </div>
        </div>
        <div id="DIV_1373">
            <div id="DIV_1374">
                <div id="DIV_1375">
                    <h2 id="H2_1376">
                        ACERCA DE LAIKA
                    </h2>
                    <span id="SPAN_1377"><i id="I_1378"></i></span>
                </div>
                <div id="DIV_1379">
                    <div id="DIV_1380">
                        <a href="https://laika.com.co/about_us/bog" id="A_1381"></a>
                        <h3 id="H3_1382">
                            Sobre Laika
                        </h3>
                    </div>
                    <div id="DIV_1383">
                        <a href="https://laika.com.co/services/bog/dog" id="A_1384"></a>
                        <h3 id="H3_1385">
                            Servicios
                        </h3>
                    </div>
                    <div id="DIV_1386">
                        <a href="https://jobs.airavirtual.com/laika" id="A_1387"></a>
                        <h3 id="H3_1388">
                            Trabaja con nosotros
                        </h3>
                    </div>
                    <div id="DIV_1389">
                        <a href="https://blog.laika.com.co/" id="A_1390"></a>
                        <h3 id="H3_1391">
                            Blog
                        </h3>
                    </div>
                    <div id="DIV_1392">
                        <a href="https://laika.com.co/terms_conditions/bog" id="A_1393"></a>
                        <h3 id="H3_1394">
                            Términos y condiciones
                        </h3>
                    </div>
                </div>
            </div>
            <div id="DIV_1395">
                <div id="DIV_1396">
                    <h2 id="H2_1397">
                        LINKS DE INTERÉS
                    </h2>
                    <span id="SPAN_1398"><i id="I_1399"></i></span>
                </div>
                <div id="DIV_1400">
                    <div id="DIV_1401">
                        <a href="https://laika.com.co/frequent_questions/bog" id="A_1402"></a>
                        <h3 id="H3_1403">
                            Preguntas frecuentes
                        </h3>
                    </div>
                    <div id="DIV_1404">
                        <h3 id="H3_1405">
                            ¿Cómo comprar en Laika?
                        </h3>
                    </div>
                    <div id="DIV_1406">
                        <a href="https://laika.com.co/privacy_policies/bog" id="A_1407"></a>
                        <h3 id="H3_1408">
                            Política de Privacidad
                        </h3>
                    </div>
                    <div id="DIV_1409">
                        <h3 id="H3_1410">
                            Contáctanos
                        </h3>
                    </div>
                    <div id="DIV_1411">
                        <a href="https://laika.com.co/delivery_policies/bog" id="A_1412"></a>
                        <h3 id="H3_1413">
                            Políticas de Entrega
                        </h3>
                    </div>
                </div>
            </div>
            <div id="DIV_1414">
                <div id="DIV_1415">
                    <h2 id="H2_1416">
                        INFORMACIÓN
                    </h2>
                    <span id="SPAN_1417"><i id="I_1418"></i></span>
                </div>
                <div id="DIV_1419">
                    <div id="DIV_1420">
                        <h3 id="H3_1421">
                            Teléfono: +573009108496
                        </h3>
                    </div>
                    <div id="DIV_1422">
                        <h3 id="H3_1423">
                            servicioclientes@laika.com.co
                        </h3>
                    </div>
                    <div id="DIV_1424">
                        <h3 id="H3_1425">
                            Bogotá D.C., Colombia
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="DIV_1426">
            <h2 id="H2_1427">
                SUSCRÍBETE
            </h2>
            <h3 id="H3_1428">
                Recibe noticias y promociones al instante.
            </h3>
            <form action="https://laika.com.co/form-group%20mt-0" id="FORM_1429">
                <div id="DIV_1430">
                    <input type="email" placeholder="Correo electronico" id="INPUT_1431" />
                    <button type="button" id="BUTTON_1432">
                        <span id="SPAN_1433"><i id="I_1434"></i></span>
                    </button>
                </div>
                <div id="DIV_1435">
                    <input type="checkbox" id="INPUT_1436" />
                    <label for="check_notifications_resp" id="LABEL_1437"> He leído y acepto las <a href="https://laika.com.co/privacy_policies/bog" id="A_1438">Políticas de privacidad.</a> </label>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="DIV_1439" style="margin-top: 100px">
    <div id="DIV_1440">
        <div id="DIV_1441">
            <div id="DIV_1442">
                <div id="DIV_1443">
                    <span><img src="assets/home/pagoseguro.png" alt="" /></span>
                </div>
            </div>
            <div id="DIV_1448" style="margin-top: 10px;>
                <img src="assets/home/epaycooo.webp" alt="" id="IMG_1450" />
                <img src="assets/home/mercado-pago.webp" alt="" id="IMG_1449" />
                <img src="assets/home/epayco.webp" alt="" id="IMG_1450" />
                <img src="assets/home/pse.webp" alt="" id="IMG_1452" />
                <img src="assets/home/visa.webp" alt="" id="IMG_1453" />
                <img src="assets/home/master.webp" alt="" id="IMG_1454" />
                <img src="assets/home/american.webp" alt="" id="IMG_1455" />
                <img src="assets/home/diners.webp" alt="" id="IMG_1455" />
                <img src="assets/home/kushki.svg" alt="" id="IMG_1456" />
            </div>
        </div>
        <div id="DIV_1457">
            <div id="DIV_1458"><img src="assets/home/proteccion.svg" width="20" alt="" id="IMG_1459" /> Protección segura 24/7</div>
        </div>
        <div id="DIV_1460">
            <a href="https://itunes.apple.com/co/app/laika/id1325285117?mt=8" id="A_1461"><img src="assets/home/app-store.webp" id="IMG_1462" alt="" /></a>
            <a href="https://play.google.com/store/apps/details?id=com.kubo.laika" id="A_1463"><img src="assets/home/google-play-store.webp" id="IMG_1464" alt="" /></a>
            <a href="https://appgallery5.huawei.com/#/app/C101252007" id="A_1465"><img src="assets/home/huawei-store.webp" id="IMG_1466" alt="" /></a>
        </div>
    </div>
    <div id="DIV_1467">
        <div id="DIV_1468">
            <div id="DIV_1469">
                <a href="https://www.sic.gov.co/" id="A_1470">https://www.sic.gov.co</a> <span id="SPAN_1471">/ Proyecto E S.A.S. / NIT:</span> 901.110.407 -4 <span id="SPAN_1472">/ Dirección de notificación judicial:</span> Cra 68G No. 74B
                - 56, Bogotá DC
            </div>
            <div id="DIV_1473">
                <span id="SPAN_1474">Teléfono:</span> 300 9108496 <span id="SPAN_1475">/ Correo electrónico para notificación judicial:</span> <a href="mailto:contabilidad@laika.com.co" id="A_1476">contabilidad@laika.com.co</a>
            </div>
        </div>
    </div>
    <div id="DIV_1477">
        <div id="DIV_1478">
            <div id="DIV_1479"><a href="https://www.sic.gov.co/" id="A_1480">https://www.sic.gov.co</a> <span id="SPAN_1481">/ Proyecto E S.A.S. / NIT:</span> 901.110.407 -4</div>
            <div id="DIV_1482"><span id="SPAN_1483">Dirección de notificación judicial:</span> Cra 68G No. 74B - 56, Bogotá DC</div>
            <div id="DIV_1484"><span id="SPAN_1485">Correo electrónico para notificación judicial:</span> <a href="mailto:contabilidad@laika.com.co" id="A_1486">contabilidad@laika.com.co</a></div>
            <div id="DIV_1487"><span id="SPAN_1488">Teléfono:</span> 300 9108496</div>
        </div>
    </div>
    <div id="DIV_1489">
        <p id="P_1490">
            Copyright © 2021 LAIKA - Derechos reservados
        </p>
    </div>
</div>

                    
                       

       





    </body>
</html>
