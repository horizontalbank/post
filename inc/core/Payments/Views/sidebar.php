<div class="sub-sidebar bg-white d-flex flex-column flex-row-auto">
    <div class="d-flex mb-10 p-20">
        <div class="d-flex align-items-center w-lg-400px">
            <form class="w-100 position-relative ">
                <div class="input-group sp-input-group">
                  <span class="input-group-text bg-light border-0 fs-20 bg-gray-100 text-gray-800" id="sub-menu-search"><i class="fad fa-search"></i></span>
                  <input type="text" class="form-control form-control-solid ps-15 bg-light border-0 search-input" data-search="search-item" name="search" value="" placeholder="<?php _e("Search")?>" autocomplete="off">
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex mb-10 p-l-20 p-r-20 m-b-12">
        <h2 class="text-gray-800 fw-bold"><?php _e( $config['menu']['sub_menu']['name'] )?></h2>
    </div>

    <div class="sp-menu n-scroll sp-menu-two menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 p-l-20 p-r-20 m-b-12 fw-5 users-list">
        <div class="search-item">
            <a href="<?php _e( get_module_url('index/report') )?>" class="sp-menu-item d-flex align-items-center px-2 py-2 rounded bg-hover-light-primary actionItem mb-1 <?php _ec( (uri('segment', 3)=='report' || uri('segment', 3)=='')?'bg-light-primary':'' )?>" data-remove-other-active="true" data-active="bg-light-primary" data-result="html" data-content="main-wrapper" data-history="<?php _e( get_module_url('index/report') )?>">
                <div class="d-flex mb-10 me-auto w-100 align-items-center">
                    <div class="d-flex align-items-center mb-10 ">
                        <div class="symbol symbol-40px p-r-10">
                            <span class="symbol-label border bg-white">
                                <i class="fad fa-chart-pie align-self-center fs-18 text-success"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-grow-1">
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-0 fs-14"><?php _e('Payment report')?></h5>
                        <span class="text-gray-700 fs-10"><?php _e('Report your payments')?></span>
                    </div>
                </div>
            </a>
        </div>
        <div class="search-item">
            <a href="<?php _e( get_module_url('index/list') )?>" class="sp-menu-item d-flex align-items-center px-2 py-2 rounded bg-hover-light-primary actionItem mb-1 users-list <?php _ec( (uri('segment', 3)=='list')?'bg-light-primary':'' )?>" data-remove-other-active="true" data-active="bg-light-primary" data-result="html" data-content="main-wrapper" data-history="<?php _e( get_module_url('index/list') )?>">
                <div class="d-flex mb-10 me-auto w-100 align-items-center">
                    <div class="d-flex align-items-center mb-10 ">
                        <div class="symbol symbol-40px p-r-10">
                            <span class="symbol-label border bg-white">
                                <i class="fas fa-history fs-18 text-primary"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-grow-1">
                        <h5 class="custom-list-title fw-bold text-gray-800 mb-0 fs-14"><?php _e('Payment history')?></h5>
                        <span class="text-gray-700 fs-10"><?php _e('List all your payments')?></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>