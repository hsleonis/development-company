<section id="search-content">
    <div id="search-ddf" class="search-bg ddf">
        <div class="container-fluid height100">
            <div class="row height100">
                <div class="col-md-6 col-sm-6 col-xs-4 height100 search-left always-visible"></div>
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
                                        <input type="text" name="name" data-ng-model="searchProject">
                                    </p>

                                    <p>
                                        <label for="name">BY CATEGORY</label>
                                        <select data-ng-model="searchCat">
                                            <option value=""></option>
                                            <option value="ongoing">Ongoing</option>
                                            <option value="upcoming">Upcoming</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </p>

                                    <p>
                                        <label for="name">BY CITY</label>
                                        <select data-ng-model="searchCity">
                                            <option value=""></option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Shylet">Shylet</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                        </select>
                                    </p>

                                    <p>
                                        <label for="name">BY ZONE</label>
                                        <select data-ng-model="searchZone">
                                            <option value=""></option>
                                            <option value="Gulshan">Gulshan</option>
                                            <option value="Banani">Banani</option>
                                            <option value="Khulshi">Khulshi, Chittagong</option>
                                            <option value="Uttara">Uttara</option>
                                            Dhanmondi
                                        </select>
                                    </p>

                                    <p>
                                        <label for="name">BY SIZE (IN SFT)</label>
                                        <select data-ng-model="searchSize">
                                            <option value=""></option>
                                            <option value="">300</option>
                                            <option value="">500</option>
                                            <option value="">1200</option>
                                            <option value="">1500</option>
                                        </select>
                                    </p>

                                    <p>
                                        <button class="search-btn" type="button">RESET</button>
                                    </p>
                                </form>
                            </div>

                            <div class="col-md-6 col-sm-6 src-right-cont">
                                <h5 class="blue-clr">Projects matched your search keywords</h5>

                                <div id="about" class="nano">
                                    <div class="nano-content">
                                        <ul class="list-ul">
                                            <li>
                                                <a href="#">
                                                    <div>
                                                        <img src="#" alt="" />
                                                        <p></p>
                                                        <span></span>
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