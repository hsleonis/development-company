<script>
    window.projects = 
<?php
        $args = array(
            'post_type' => 'projects'
        );
        $pr = new wp_query($args);
        $arr = array();
        while($pr->have_posts()): $pr->the_post();
            $tmp = array();
            $tmp['status'] = (wp_get_post_terms(get_the_ID(), 'status', array("fields" => "all"))[0]->slug!==null)?wp_get_post_terms(get_the_ID(), 'status', array("fields" => "all"))[0]->slug:'';
            $tmp['city'] = (wp_get_post_terms(get_the_ID(), 'city', array("fields" => "all"))[0]->slug!==null)?wp_get_post_terms(get_the_ID(), 'city', array("fields" => "all"))[0]->slug:'';
            $tmp['size'] = (wp_get_post_terms(get_the_ID(), 'size', array("fields" => "all"))[0]->slug!==null)?wp_get_post_terms(get_the_ID(), 'size', array("fields" => "all"))[0]->slug:'';
            $tmp['permalink'] = get_the_permalink();
            $tmp['thumbnail'] = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
            $tmp['title'] = get_the_title();
            $tmp['location'] = (get_post_meta(get_the_ID(),'_themeaxe_group_location',false)[0] !== null)?get_post_meta(get_the_ID(),'_themeaxe_group_location',false)[0]:'';
            array_push($arr, $tmp);
        endwhile; wp_reset_query();
print_r(json_encode($arr));
?>;
</script>
<section id="search-content" ng-app="leo" ng-controller="searchController" ng-init="init('projects')">
    <div id="search-ddf" class="search-bg ddf">
        <div class="container-fluid height100">
            <div class="row height100">
                <!-- Search container-->
                <div class="col-md-6 col-sm-6 col-xs-8 height100 search-right always-visible remove-padding">
                    <div id="search">
                        <h3>
                            <span class="first-letter">F</span>IND <span class="first-letter">A</span> <span class="first-letter">P</span>ROJECT
                        </h3>

                        <a class="search-button-add" href="#">
                            <i class="sprite sprite-search"></i>
                        </a>

                        <div style="clear:both"></div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 border-right src-each-cont">
                                <h5>Fill up the input fields to find a project</h5>

                                <form id="search-form" action="#" method="POST">
                                    <p>
                                        <label for="name">BY NAME</label>
                                        <input type="text" name="name" id="searchProject" ng-model="searchProject">
                                    </p>

                                    <p>
                                        <label for="name">BY STATUS</label>
                                        <select id="searchStatus" ng-model="searchStatus">
                                            <option value=""></option>
                                            <?php
                                                $args = array( 'hide_empty=0' );

                                                $terms = get_terms( 'status', $args );
                                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                                    $count = count( $terms );
                                                    $i = 0;
                                                    $term_list = '';
                                                    foreach ( $terms as $term ) {
                                                        $i++;
                                                        $term_list .= '<option value="' . $term->slug . '">'. $term->name .'</option>';
                                                        if ( $count != $i ) {
                                                            $term_list .= '';
                                                        }
                                                        else {
                                                            $term_list .= '';
                                                        }
                                                    }
                                                    echo $term_list;
                                                }
                                            ?>
                                        </select>
                                    </p>

                                    <p>
                                        <label for="name">BY CITY</label>
                                        <select id="searchCity" ng-model="searchCity">
                                            <option value=""></option>
                                            <?php
                                                $args = array( 'hide_empty=0' );

                                                $terms = get_terms( 'city', $args );
                                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                                    $count = count( $terms );
                                                    $i = 0;
                                                    $term_list = '';
                                                    foreach ( $terms as $term ) {
                                                        $i++;
                                                        $term_list .= '<option value="' . $term->slug . '">'. $term->name .'</option>';
                                                        if ( $count != $i ) {
                                                            $term_list .= '';
                                                        }
                                                        else {
                                                            $term_list .= '';
                                                        }
                                                    }
                                                    echo $term_list;
                                                }
                                            ?>
                                        </select>
                                    </p>

                                    <p>
                                        <label for="name">BY SIZE (IN SFT)</label>
                                        <select id="searchSize" ng-model="searchSize">
                                            <option value=""></option>
                                            <?php
                                                $args = array( 'hide_empty=0' );

                                                $terms = get_terms( 'size', $args );
                                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                                    $count = count( $terms );
                                                    $i = 0;
                                                    $term_list = '';
                                                    foreach ( $terms as $term ) {
                                                        $i++;
                                                        $term_list .= '<option value="' . $term->slug . '">'. $term->name .'</option>';
                                                        if ( $count != $i ) {
                                                            $term_list .= '';
                                                        }
                                                        else {
                                                            $term_list .= '';
                                                        }
                                                    }
                                                    echo $term_list;
                                                }
                                            ?>
                                        </select>
                                    </p>

                                    <p>
                                        <button class="search-btn" type="reset" ng-click="reset()">RESET</button>
                                    </p>
                                </form>
                            </div>

                            <div class="col-md-6 col-sm-6 src-right-cont">
                                <h5 class="blue-clr">{{data.length}} Projects matched your search keywords</h5>

                                <div id="about" class="nano">
                                    <div class="nano-content">
                                        <ul class="list-ul">
                                            <li data-ng-repeat="item in data = (projects|filter:searchSize|filter:searchProject|filter:searchCity|filter:searchStatus)" data-status="{{item.status}}" data-city="{{item.city}}" data-size="{{item.size}}">
                                                <a href="{{item.permalink}}">
                                                    <div>
                                                        <img src="{{item.thumbnail}}" alt="" />
                                                        <p>{{item.title}}</p>
                                                        <span>{{item.location}}</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of search container-->
            </div>
        </div>
    </div>
</section>