<?php
/**
 * search breadcums
 *
 *
 * @package meika
 */
?>
<!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center p-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                 <h2><?php printf( esc_html__( 'Search : %s', 'meika' ), '<span>' . get_search_query() . '</span>' );?></h2>  
                            </div>
                        </div>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'meika' ); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php printf( esc_html__( 'Search : %s', 'meika' ), '<span>' . get_search_query() . '</span>' );?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->