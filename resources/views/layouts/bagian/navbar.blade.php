<div class="navbar-header">
                    <a class="navbar-brand" href="home">Laundry</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">

                        <ul class="dropdown-menu dropdown-alerts">

                        </ul>
                    </li>


                            <li><a class="dropdown-item" href="{{ route('logout')}}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class= "fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                            @csrf
                        </form>


                        </ul>
                    </li>
                </ul>
