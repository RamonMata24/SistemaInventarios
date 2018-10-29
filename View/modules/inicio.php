
<div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-brand-live-messenger bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Usuarios</span>

                                                        <h4>
                                                        <?php
                                                            $count = new Controller();
                                                            $count->usuarios();
                                                        ?>
                                                        </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont icofont-ui-user"></i><a href="index.php?action=usuarios"> Más Información</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-list bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Categorias</span>
                                                        <h4>
                                                        <?php
                                                            $count = new Controller();
                                                            $count->categorias();
                                                        ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont icofont icofont-files"></i><a href="index.php?action=categorias"> Más Información</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-ui-cart bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Productos</span>
                                                        <h4>
                                                        <?php
                                                            $count = new Controller();
                                                            $count->productos();
                                                        ?>
                                                        </h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont icofont-basket"></i><a href="index.php?action=productos"> Más Información</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- card1  -->
                                            <div class="card whether-card">
                                                    <div class="text-center card-block-big">
                                                        <div class="row text-center daily-whether">
                                                            <div class="col-xl-2 col-md-4 col-6">
                                                                <div class="daily-whether-block">
                                                                    <h5>Lunes</h5>
                                                                    <svg version="1.1" id="sun" class="climacon climacon_sun" viewBox="15 15 70 70">
                                                                        <clipPath id="sunFillClip">
                                                                            <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z"/>
                                                                        </clipPath>
                                                                        <g class="climacon_iconWrap climacon_iconWrap-sun">
                                                                            <g class="climacon_componentWrap climacon_componentWrap-sun">
                                                                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"/>
                                                                                </g>
                                                                                <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                                                                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999"/>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <h5>Max 32° Min 25°</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-md-4 col-6">
                                                                <div class="daily-whether-block">
                                                                    <h5>Martes</h5>
                                                                    <svg version="1.1" id="cloudHailAltMoon" class="climacon climacon_cloudHailAltMoon" viewBox="15 15 70 70">
                                                                        <clipPath id="cloudFillClip">
                                                                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                                        </clipPath>
                                                                        <clipPath id="moonCloudFillClip1">
                                                                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"/>
                                                                        </clipPath>
                                                                        <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltMoon">
                                                                            <g clip-path="url(#cloudFillClip)">
                                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud">
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"/>
                                                                                    <path class="climacon_component climacon_component-fill climacon_component-fill_moon" fill="#FFFFFF" d="M59.235,30.851c-3.556,0.813-6.211,3.989-6.211,7.792c0,4.417,3.581,7.999,7.999,7.999c3.802,0,6.979-2.655,7.791-6.211C63.961,39.527,60.139,35.705,59.235,30.851z"/>
                                                                                </g>
                                                                            </g>
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                                                    <circle cx="42" cy="65.498" r="2"/>
                                                                                </g>
                                                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                                                    <circle cx="49.999" cy="65.498" r="2"/>
                                                                                </g>
                                                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                                                    <circle cx="57.998" cy="65.498" r="2"/>
                                                                                </g>
                                                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                                                    <circle cx="42" cy="65.498" r="2"/>
                                                                                </g>
                                                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                                                    <circle cx="49.999" cy="65.498" r="2"/>
                                                                                </g>
                                                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                                                    <circle cx="57.998" cy="65.498" r="2"/>
                                                                                </g>
                                                                            </g>
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"/>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <h5>Max 24° Min 15°</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-md-4 col-6">
                                                                <div class="daily-whether-block">
                                                                    <h5>Miércoles</h5>
                                                                    <svg version="1.1" id="cloudLightning" class="climacon climacon_cloudLightning" viewBox="15 15 70 70">
                                                                        <g class="climacon_iconWrap climacon_iconWrap-cloudLightning">
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                                                                <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "/>
                                                                            </g>
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.37 ,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"/>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <h5>Max 27° Min 18°</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-md-4 col-6">
                                                                <div class="daily-whether-block">
                                                                    <h5>Jueves</h5>
                                                                    <svg version="1.1" id="cloudSun" class="climacon climacon_cloudSun" viewBox="15 15 70 70">
                                                                        <clipPath id="cloudFillClip1">
                                                                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                                        </clipPath>
                                                                        <clipPath id="sunCloudFillClip">
                                                                            <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                                                        </clipPath>
                                                                        <g class="climacon_iconWrap climacon_cloudSun-iconWrap">
                                                                            <g clip-path="url(#cloudFillClip)">
                                                                                <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud"  >
                                                                                    <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-orth" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                                                    </g>
                                                                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                                        <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"/>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"/>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <h5>Max 30° Min 15°</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-md-4 col-6">
                                                                <h5>Viernes</h5>
                                                                <svg version="1.1" id="cloudRain" class="climacon climacon_cloudRain" viewBox="15 15 70 70">
                                                                        <clipPath id="cloudFillClip2">
                                                                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                                                        </clipPath>
                                                                        <g class="climacon_iconWrap climacon_iconWrap-cloudRain">
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                                                                            </g>
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent_cloud" clip-path="url(#cloudFillClip)">
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.943,64.941v-4.381c2.389-1.384,4-3.961,4-6.92c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.48-4.334,1.291c-1.23-5.317-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.551,6.728,4,8.924v4.916c-4.777-2.768-8-7.922-8-13.84c0-8.835,7.163-15.997,15.998-15.997c6.004,0,11.229,3.311,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.372,11.998,12C71.941,58.863,68.602,63.293,63.943,64.941z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                <h5>Max 30° Min 17°</h5>
                                                            </div>
                                                            <div class="col-xl-2 col-md-4 col-6">
                                                                <h5>Sábado/h5>
                                                                <svg version="1.1" id="cloudFogMoonAlt" class="climacon climacon_cloudFogMoonAlt" viewBox="15 15 70 70">
                                                                        <clipPath id="moonCloudFillClip">
                                                                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                                                        </clipPath>
                                                                        <clipPath id="newMoonCloudFillClip">
                                                                            <path d="M15,15v70h70V15H15z M59.943,65.638c-2.775,0-12.801,0-15.998,0c-8.836,0-15.998-7.162-15.998-15.998c0-8.835,7.162-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.941,60.265,66.57,65.638,59.943,65.638z"></path>
                                                                        </clipPath>
                                                                        <g class="climacon_iconWrap climacon_iconWrap-cloudFogMoon">
                                                                            <g clip-path="url(#newMoonCloudFillClip)">
                                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                                                                </g>
                                                                            </g>
                                                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-Fog">
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,55.641c-0.262-0.646-0.473-1.314-0.648-2h43.47c0,0.685-0.069,1.349-0.181,2H29.177z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M36.263,35.643c2.294-1.271,4.93-1.999,7.738-1.999c2.806,0,5.436,0.73,7.728,1.999H36.263z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M28.142,47.642c0.085-0.682,0.218-1.347,0.387-1.999h40.396c0.552,0.613,1.039,1.281,1.455,1.999H28.142z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M29.177,43.643c0.281-0.693,0.613-1.359,0.984-2h27.682c0.04,0.068,0.084,0.135,0.123,0.205c0.664-0.114,1.339-0.205,2.033-0.205c2.451,0,4.729,0.738,6.627,2H29.177z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M31.524,39.643c0.58-0.723,1.225-1.388,1.92-2h21.123c0.689,0.61,1.326,1.28,1.902,2H31.524z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.816,51.641H28.142c-0.082-0.656-0.139-1.32-0.139-1.999h43.298C71.527,50.285,71.702,50.953,71.816,51.641z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M71.301,57.641c-0.246,0.699-0.555,1.367-0.921,2H31.524c-0.505-0.629-0.957-1.299-1.363-2H71.301z"></path>
                                                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_fogLine" d="M33.444,61.641h35.48c-0.68,0.758-1.447,1.435-2.299,2H36.263C35.247,63.078,34.309,62.4,33.444,61.641z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                <h5>Max 28° Min 16°</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer card-bg-inverce text-white">
                                                        <div class="card-block-small">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <h4>Cd. Victoria ,Tamaulipas <small>Ayer, 28 de Octubre 2018</small></h4>
                                                                    <h5 class="text-white">Calor &amp; Soleado</h5>
                                                                    <i class="icofont icofont-clouds f-20 m-r-10 text-muted"></i>
                                                                    <h5 class="text-white">57 MPH</h5>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <i class="icofont icofont-clouds f-60 text-muted"></i>
                                                                    <div class="d-inline-block m-l-10">
                                                                        <h5 class="text-white">Actualmente</h5>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- social  End -->