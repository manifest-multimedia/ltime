<x-page-layout title="L-time Properties | Our Projects" pagetitle="Projects"> 
    
     <section class="property-page-section property-grid">
        <div class="auto-container">
            <div class="row clearfix">
         
                <x-sidebar :locations="$locations" />
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Search Results: 
                                    {{-- <span>Showing 1-5 of 20 Properties</span> --}}
                                </h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Sort by: Newest">Sort by: Newest</option>
                                           <option value="1">High to Low</option>
                                           <option value="2">Low to High</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="short-menu clearfix">
                                    <button class="list-view"><i class="icon-35"></i></button>
                                    <button class="grid-view on"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper grid">
                            <x-property-listview :properties="$properties" />
                            <x-property-gridview :properties="$properties" />
                        </div>
                        {{-- <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-grid.html" class="current">1</a></li>
                                <li><a href="property-grid.html">2</a></li>
                                <li><a href="property-grid.html">3</a></li>
                                <li><a href="property-grid.html"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->

</x-page-layout>