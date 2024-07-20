<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task:: Tickets Detail</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/my-task.style.min.css">
</head>
<body  data-mytask="theme-indigo">

<div id="mytask-layout">

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index-2.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
                <span class="logo-text">My-Task</span>
            </a>
            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="#">
                        <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="dashboard-Components">
                        <li><a class="ms-link" href="index-2.html"> <span>Hr Dashboard</span></a></li>
                        <li><a class="ms-link" href="project-dashboard.html"> <span>Project Dashboard</span></a></li>
                    </ul>
                </li>
                <li  class="collapsed">
                    <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                        <i class="icofont-briefcase"></i><span>Projects</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="project-Components">
                        <li><a class="ms-link" href="projects.html"><span>Projects</span></a></li>
                        <li><a class="ms-link" href="task.html"><span>Tasks</span></a></li>
                        <li><a class="ms-link" href="timesheet.html"><span>Timesheet</span></a></li>
                        <li><a class="ms-link" href="team-leader.html"><span>Leaders</span></a></li>
                    </ul>
                </li>
                
                <li class="collapsed">
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#"><i
                            class="icofont-ticket"></i> <span>Tickets</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse show" id="tikit-Components">
                        <li><a class="ms-link" href="tickets.html"> <span>Tickets View</span></a></li>
                        <li><a class="ms-link active" href="ticket-detail.html"> <span>Ticket Detail</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                            class="icofont-user-male"></i> <span>Our Clients</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components">
                        <li><a class="ms-link" href="ourclients.html"> <span>Clients</span></a></li>
                        <li><a class="ms-link" href="profile.html"> <span>Client Profile</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-Components" href="#"><i
                            class="icofont-users-alt-5"></i> <span>Employees</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="emp-Components">
                        <li><a class="ms-link" href="members.html"> <span>Members</span></a></li>
                        <li><a class="ms-link" href="employee-profile.html"> <span>Members Profile</span></a></li>
                        <li><a class="ms-link" href="holidays.html"> <span>Holidays</span></a></li>
                        <li><a class="ms-link" href="attendance-employees.html"> <span>Attendance Employees</span></a></li>
                        <li><a class="ms-link" href="attendance.html"> <span>Attendance</span></a></li>
                        <li><a class="ms-link" href="leave-request.html"> <span>Leave Request</span></a></li>
                        <li><a class="ms-link" href="department.html"> <span>Department</span></a></li>
                        <li><a class="ms-link" href="loan.html"> <span>Loan</span></a></li>
                    </ul>
                </li>
               
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                            class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsone">
                        <li><a class="ms-link" href="invoices.html"><span>Invoices</span> </a></li>
                        <li><a class="ms-link" href="payments.html"><span>Payments</span> </a></li>
                        <li><a class="ms-link" href="expenses.html"><span>Expenses</span> </a></li>
                        <li><a class="ms-link" href="create-invoice.html"><span>Create Invoice</span> </a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#payroll-Components" href="#"><i
                            class="icofont-users-alt-5"></i> <span>Payroll</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="payroll-Components">
                        <li><a class="ms-link" href="salaryslip.html"><span>Employee Salary</span> </a></li>
                        
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app-Components" href="#">
                        <i class="icofont-contrast"></i> <span>App</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="app-Components">
                        <li><a class="ms-link" href="calendar.html"> <span>Calander</span></a></li>
                        <li><a class="ms-link" href="chat.html"><span>Chat App</span></a></li>
                    </ul>
                </li>
                                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#extra-Components" href="#">
                        <i class="icofont-code-alt"></i> <span>Other Pages</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="extra-Components">
                        <li><a class="ms-link" href="charts.html"> <span>Apex Charts</span></a></li>
                        <li><a class="ms-link" href="forms.html"><span>Forms Example</span></a></li>
                        <li><a class="ms-link" href="table.html"> <span>Table Example</span></a></li>
                        <li><a class="ms-link" href="review.html"><span>Reviews Page</span></a></li>
                         <li><a class="ms-link" href="icon.html"><span>Icons</span></a></li>
                        <li><a class="ms-link" href="contact.html"><span>Contact</span></a></li>
                        <li><a class="ms-link" href="widgets.html"><span>Widgets</span></a></li>
                        <li><a class="ms-link" href="todo-list.html"><span>Todo-List</span></a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint"></i> <span>UI Components</span></a></li>
            </ul>

            
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4"> 

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                            <div class="avatar-list avatar-list-stacked px-3">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                            </div>
                        </div>
                        <div class="dropdown notifications">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notifications</span>
                                            <span class="badge text-white">11</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Dylan Hunter</span> <small>2MIN</small></p>
                                                            <span class="">Added  2021-02-19 my-Task ui/ux Design <span class="badge bg-success">Review</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <div class="avatar rounded-circle no-thumbnail">DF</div>
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Task added Get Started with Fast Cad project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Quality Assurance Task Completed</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Add New Project for App Developemnt</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Add Timesheet For Rhinestone project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                            <span class="">Add Calander Event</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan Hunter</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                <small class="">Dylan.hunter@gmail.com</small>
                                            </div>
                                        </div>
                                        
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="task.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                        <a href="members.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a>
                                        <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-md-1">
                            <a href="#offcanvas_setting" data-bs-toggle="offcanvas" aria-expanded="false" title="template setting">
                                <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
    
                </div>
            </nav>
        </div>

        <!-- Body: Body -->       
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Tickets Detail</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row g-3">
                    <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="icofont-optic fs-4"></i></div>
                                            <div class="flex-fill ms-4 text-truncate">
                                                <div class="text-truncate">Status</div>
                                                <span class="badge bg-warning">In Progress</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="icofont-user fs-4"></i></div>
                                            <div class="flex-fill ms-4 text-truncate">
                                                <div class="text-truncate">Created Name</div>
                                                <span class="fw-bold">Sally Graham</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="icofont-price fs-4"></i></div>
                                            <div class="flex-fill ms-4 text-truncate">
                                                <div class="text-truncate">Priority</div>
                                                <span class="badge bg-danger">High</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row end  -->
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="fw-bold mb-3 text-danger">Internet Not Working</h6>
                                        <p>Vivamus blandit, odio eget tristique volutpat, eros lectus auctor lorem, vitae sagittis sapien mauris interdum ex. Donec eu eleifend massa. Donec viverra, ex ut euismod hendrerit, nunc nisi cursus est, 
                                            nec scelerisque lorem erat vel nunc. Duis non urna ornare, commodo felis ac, fringilla tortor. Nulla dui libero, dignissim et eros id, elementum rutrum risus</p>
                                        <p>Vivamus blandit, odio eget tristique volutpat, eros lectus auctor lorem, vitae sagittis sapien mauris interdum ex. Donec eu eleifend massa. Donec viverra, ex ut euismod hendrerit, nunc nisi cursus est, nec scelerisque lorem erat vel nunc. Duis non urna ornare, 
                                            commodo felis ac, fringilla tortor. Nulla dui libero, dignissim et eros id, elementum rutrum risus</p>
                                    </div> 
                                </div>
                                <div class="row g-3">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-bold mb-3 text-danger">Bug Image Atteched</h6>
                                                <div class="flex-grow-1">
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Image3.jpg</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Image4.jpg</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Image6.jpg</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Image11.jpg</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg light-danger-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-bug fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">Image5.jpg</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn light-danger-bg text-end">Download</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-bold mb-3 text-danger">Bug File Atteched</h6>
                                                <div class="flex-grow-1">
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">file1.pdf</h6> 
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn bg-lightgreen text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">file2.pdf</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn bg-lightgreen text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">file3.pdf</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn bg-lightgreen text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center border-bottom">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">file4.pdf</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn bg-lightgreen text-end">Download</button>
                                                    </div>
                                                    <div class="py-2 d-flex align-items-center">
                                                        <div class="d-flex ms-3 align-items-center flex-fill">
                                                            <span class="avatar lg bg-lightgreen rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-file-pdf fs-5"></i></span>
                                                            <div class="d-flex flex-column ps-3">
                                                                <h6 class="fw-bold mb-0 small-14">file5.pdf</h6>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn bg-lightgreen text-end">Download</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row end  -->
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body card-body-height py-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <h6 class="mb-0 fw-bold mb-3">Ticket Chat</h6>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <div class="post">
                                                    <textarea class="form-control" placeholder="Post" rows="4"></textarea>
                                                    <div class="py-3">
                                                        <a href="#" class="px-3 " title="upload images"><i class="icofont-ui-camera"></i></a>
                                                        <a href="#" class="px-3 " title="upload video"><i class="icofont-video-cam"></i></a>
                                                        <a href="#" class="px-3 " title="Send for signuture"><i class="icofont-pen-alt-2"></i></a>
                                                        <button class="btn btn-primary float-sm-end  mt-2 mt-sm-0">Sent</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .Card End -->
                                        <ul class="list-unstyled res-set">
                                            <li class="card mb-2">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3 pb-3 border-bottom">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Nellie Maxwell</span> <span class="text-muted small">posted a status</span></h6>
                                                            <span class="text-muted">3 hours ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6>Internet Not Working for Last 2 Days</h6>
                                                        <p>On the other hand, if the Internet doesn't work on other devices too, then the problem is most likely with the router or the Internet connection itself</p>
                                                        <div class="mb-2 mt-4">
                                                            <a class="me-lg-4 me-2 text-primary" href="#"><i class="icofont-speech-comments"></i> Comment (2)</a>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex mt-3 pt-3 border-top">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                                <div class="flex-fill ms-3 text-truncate">
                                                                    <p class="mb-0"><span>Zoe Wright</span> <small class="msg-time">1 hour ago</small></p>
                                                                    <span class="text-muted">One good way to fix the router is to restart it.</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-3 pt-3 border-top">
                                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                                <div class="flex-fill ms-3 text-truncate">
                                                                    <p class="mb-0"><span>Diane Fisher</span> <small class="msg-time">1 hour ago</small></p>
                                                                    <span class="text-muted">Turn on the modem and one minute later turn on the router. Wait for a few minutes and check”</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <textarea class="form-control" placeholder="Replay"></textarea>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                        </ul>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Members-->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inviteby_email">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="exampleInputEmail1">
                            <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                        </div>
                    </div>
                    <div class="members_list">
                        <h6 class="fw-bold ">Employee </h6>
                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                        <span class="text-muted">rachel.carr@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <span class="members-role ">Admin</span>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                        <span class="text-muted">lucas.baker@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                      
                                                    <span>All operations permission</span>
                                                   </a>
                                                   
                                                </li>
                                                <li>
                                                     <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                           <span>Only Invite & manage team</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                        <span class="text-muted">una.coleman@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                      
                                                    <span>All operations permission</span>
                                                   </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                           <span>Only Invite & manage team</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icofont-ui-settings  fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>

    <!-- start: template setting, and more. -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas_setting" aria-labelledby="offcanvas_setting">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title">Template Setting</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body d-flex flex-column">
			<div class="mb-4">
				<h6>Set Theme Color</h6>
				<ul class="choose-skin list-unstyled mb-0">
					<li data-theme="ValenciaRed"><div style="--mytask-theme-color: #D63B38;"></div></li>
					<li data-theme="SunOrange"><div style="--mytask-theme-color: #F7A614;"></div></li>
					<li data-theme="AppleGreen"><div style="--mytask-theme-color: #5BC43A;"></div></li>
					<li data-theme="CeruleanBlue"><div style="--mytask-theme-color: #00B8D6;"></div></li>
					<li data-theme="Mariner"><div style="--mytask-theme-color: #0066FE;"></div></li>
					<li data-theme="PurpleHeart" class="active"><div style="--mytask-theme-color: #6238B3;"></div></li>
					<li data-theme="FrenchRose"><div style="--mytask-theme-color: #EB5393;"></div></li>
				</ul>
			</div>
            <div class="mb-4 flex-grow-1">
				<h6>Set Theme Light/Dark/RTL</h6>
				<!-- Theme: Switch Theme -->
                <ul class="list-unstyled mb-0">
                    <li>
                        <div class="form-check form-switch theme-switch">
                            <input class="form-check-input fs-6" type="checkbox" role="switch" id="theme-switch">
                            <label class="form-check-label mx-2" for="theme-switch">Enable Dark Mode!</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check form-switch theme-rtl">
                            <input class="form-check-input fs-6" type="checkbox" role="switch" id="theme-rtl">
                            <label class="form-check-label mx-2" for="theme-rtl">Enable RTL Mode!</label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check form-switch monochrome-toggle">
                            <input class="form-check-input fs-6" type="checkbox" role="switch" id="monochrome">
                            <label class="form-check-label mx-2" for="monochrome">Monochrome Mode</label>
                        </div>
                    </li>
                </ul>
			</div>
			<div class="d-flex">
				<a href="https://themeforest.net/item/mytask-hr-project-management-admin-template/31974551" class="btn w-100 me-1 py-2 btn-primary">Buy Now</a>
				<a href="https://themeforest.net/user/pixelwibes/portfolio" class="btn w-100 ms-1 py-2 btn-dark">View Portfolio</a>
			</div>
		</div>
	</div>
</div>
 
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>


<!-- Jquery Page Js -->
<script src="../js/template.js"></script>

</body>

</html>
