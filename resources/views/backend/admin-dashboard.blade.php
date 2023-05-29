<x-backend-layout> 

 @can('Admin')
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="page-header">
                        <div class="page-title">
                            <h3>Dashboard</h3>
                        </div>
                        
                        <div class="toggle-switch">
                            <a href="{{url('/portal/profile')}}">You're logged in as Admin </a>
                            <label class="switch s-icons s-outline  s-outline-secondary">
                               
                            </label>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-table-two">

                            @livewire('recent-orders-table')

                            </div>
                        </div>
                        

                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-table-three">

                            @livewire('top-affiliates-table')

                            </div>
                        </div>

                        {{-- <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-chart-one">
                                <div class="widget-heading">
                                    <h5 class="">Revenue</h5>
                                    <div class="task-action">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-content">
                                    <div id="revenueMonthly"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-chart-two">
                                <div class="widget-heading">
                                    <h5 class="">Sales by Category</h5>
                                </div>
                                <div class="widget-content">
                                    <div id="chart-2" class=""></div>
                                </div>
                            </div>
                        </div> --}}

                        

                        {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <div class="widget-one widget">
                                <div class="widget-content">
                                    <div class="w-numeric-value">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                        </div>
                                        <div class="w-content">
                                            <span class="w-value">3,192</span>
                                            <span class="w-numeric-title">Total Orders</span>
                                        </div>
                                    </div>
                                    <div class="w-chart">
                                        <div id="total-orders"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                            <div class="widget widget-activity-four">

                                <div class="widget-heading">
                                    <h5 class="">Recent Activities</h5>
                                </div>

                                <div class="widget-content">

                                    <div class="mt-container mx-auto">
                                        <div class="timeline-line">

                                            <div class="item-timeline timeline-primary">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p><span>Updated</span> Server Logs</p>
                                                    <span class="badge">Pending</span>
                                                    <p class="t-time">Just Now</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline timeline-success">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">2 min ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-danger">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Backup <span>Files EOD</span></p>
                                                    <span class="badge">Pending</span>
                                                    <p class="t-time">14:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-dark">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">16:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                                    <span class="badge">In progress</span>
                                                    <p class="t-time">17:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-secondary">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Rebooted Server</p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">17:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Send contract details to Freelancer</p>
                                                    <span class="badge">Pending</span>
                                                    <p class="t-time">18:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-dark">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Kelly want to increase the time of the project.</p>
                                                    <span class="badge">In Progress</span>
                                                    <p class="t-time">19:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-success">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Server down for maintanence</p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">19:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-secondary">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Malicious link detected</p>
                                                    <span class="badge">Block</span>
                                                    <p class="t-time">20:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Rebooted Server</p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">23:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline timeline-primary">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p><span>Updated</span> Server Logs</p>
                                                    <span class="badge">Pending</span>
                                                    <p class="t-time">Just Now</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline timeline-success">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">2 min ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-danger">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Backup <span>Files EOD</span></p>
                                                    <span class="badge">Pending</span>
                                                    <p class="t-time">14:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-dark">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                                    <span class="badge">Completed</span>
                                                    <p class="t-time">16:00</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                                    <span class="badge">In progress</span>
                                                    <p class="t-time">17:00</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tm-action-btn">
                                        <button class="btn"><span>View All</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-table-one">
                                <div class="widget-heading">
                                    <h5 class="">Transactions</h5>
                                    <div class="task-action">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-content">

                                    <div class="transactions-list t-info">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title">SP</span>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4>Shaun Park</h4>
                                                    <p class="meta-date">10 Jan 1:00PM</p>
                                                </div>
                                            </div>
                                            <div class="t-rate rate-inc">
                                                <p><span>+$36.11</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="transactions-list">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4>Electricity Bill</h4>
                                                    <p class="meta-date">04 Jan 1:00PM</p>
                                                </div>

                                            </div>
                                            <div class="t-rate rate-dec">
                                                <p><span>-$16.44</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="transactions-list">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title">AD</span>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4>Amy Diaz</h4>
                                                    <p class="meta-date">31 Jan 1:00PM</p>
                                                </div>

                                            </div>
                                            <div class="t-rate rate-inc">
                                                <p><span>+$66.44</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="transactions-list t-secondary">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4>Netflix</h4>
                                                    <p class="meta-date">02 Feb 1:00PM</p>
                                                </div>

                                            </div>
                                            <div class="t-rate rate-dec">
                                                <p><span>-$32.00</span></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="transactions-list t-info">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title">DA</span>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4>Daisy Anderson</h4>
                                                    <p class="meta-date">15 Feb 1:00PM</p>
                                                </div>
                                            </div>
                                            <div class="t-rate rate-inc">
                                                <p><span>+$10.08</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="transactions-list">
                                        <div class="t-item">
                                            <div class="t-company-name">
                                                <div class="t-icon">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title">OG</span>
                                                    </div>
                                                </div>
                                                <div class="t-name">
                                                    <h4>Oscar Garner</h4>
                                                    <p class="meta-date">20 Feb 1:00PM</p>
                                                </div>

                                            </div>
                                            <div class="t-rate rate-dec">
                                                <p><span>-$22.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                            <div class="widget widget-account-invoice-three">

                                <div class="widget-heading">
                                    <div class="wallet-usr-info">
                                        <div class="usr-name">
                                            <span><img src="assets/img/90x90.jpg" alt="admin-profile" class="img-fluid"> Alan Green</span>
                                        </div>
                                        <div class="add">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
                                        </div>
                                    </div>
                                    <div class="wallet-balance">
                                        <p>Wallet Balance</p>
                                        <h5 class=""><span class="w-currency">$</span>2953</h5>
                                    </div>
                                </div>

                                <div class="widget-amount">

                                    <div class="w-a-info funds-received">
                                        <span>Received <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
                                        <p>$97.99</p>
                                    </div>

                                    <div class="w-a-info funds-spent">
                                        <span>Spent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                                        <p>$53.00</p>
                                    </div>
                                </div>

                                <div class="widget-content">

                                    <div class="bills-stats">
                                        <span>Pending</span>
                                    </div>

                                    <div class="invoice-list">

                                        <div class="inv-detail">
                                            <div class="info-detail-1">
                                                <p>Netflix</p>
                                                <p><span class="w-currency">$</span> <span class="bill-amount">13.85</span></p>
                                            </div>
                                            <div class="info-detail-2">
                                                <p>BlueHost VPN</p>
                                                <p><span class="w-currency">$</span> <span class="bill-amount">15.66</span></p>
                                            </div>
                                        </div>

                                        <div class="inv-action">
                                            <a href="javascript:void(0);" class="btn btn-outline-primary view-details">View Details</a>
                                            <a href="javascript:void(0);" class="btn btn-outline-primary pay-now">Pay Now $29.51</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                        
                        


                

                        

                    </div>

                
            @endcan
    
    
</x-backend-layout>