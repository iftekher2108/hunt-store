
  <div class="menu bg-dark">


      <ul class="py-2">

          <li class="menu-header text-uppercase">
              <span class="menu-header-text">Dashboard</span>
          </li>

          <!-- Dashboard -->
          <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
              <a href="{{ url('home') }}" class="nav-link">
                  <i class="fa-solid me-2 fa-house"></i>
                  Dashboard
              </a>
          </li>



          <li class="menu-header text-uppercase">
              <span class="menu-header-text">Products</span>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
              <a href="javascript:void(0);" class="nav-link menu-toggle">
                  <div>
                      <i class="fa-solid me-2 fa-sitemap"></i>
                      Products
                  </div>
                  <i class="fa-solid arrow fa-caret-right"></i>
              </a>

              <ul class="menu-sub hide">
                  <li class="menu-item {{ Request::route('product.list') ? 'active' : '' }}">
                      <a href="{{ route('product.list') }}" class="nav-link">
                          Products Catalog
                      </a>
                  </li>
                  <li class="menu-item {{ Request::is('slider') ? 'active' : '' }}">
                      <a href="" class="nav-link">
                          Catagories
                      </a>
                  </li>

                  <li class="menu-item {{ Request::is('slider') ? 'active' : '' }}">
                      <a href="" class="nav-link">
                          Brands
                      </a>
                  </li>

                  {{-- <li class="menu-item ">
                        <a href="" class="nav-link">
                            Hot Sales
                        </a>
                    </li> --}}

                  {{-- <li class="menu-item ">
                        <a href="" class="nav-link">
                            Coupons
                        </a>
                    </li>

                    <li class="menu-item ">
                        <a href="" class="nav-link">
                            Exel Import
                        </a>
                    </li> --}}



              </ul>
          </li>


          <li class="menu-item">
              <a href="javascript:void(0);" class="nav-link menu-toggle">
                  <div>
                      <i class="fa-solid me-2 fa-money-bill-transfer"></i>
                      Sales
                  </div>
                  <i class="fa-solid arrow fa-caret-right"></i>
              </a>

              <ul class="menu-sub hide">
                  <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
                      <a href="" class="nav-link">
                          Orders
                      </a>
                  </li>

                  <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
                      <a href="" class="nav-link">
                          Transactions
                      </a>
                  </li>

              </ul>
          </li>


          <li class="menu-header text-uppercase">
              <span class="menu-header-text">Site Settings</span>
          </li>

          <li class="menu-item">
              <a href="javascript:void(0);" class="nav-link menu-toggle">
                  <div>
                      <i class="fa-solid me-2 fa-gears"></i>
                      Site Settings
                  </div>
                  <i class="fa-solid arrow fa-caret-right"></i>
              </a>

              <ul class="menu-sub hide">
                  <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
                      <a href="" class="nav-link">
                          Pages
                      </a>
                  </li>

                  <li class="menu-item ">
                      <a href="" class="nav-link">
                          Menus
                      </a>
                  </li>

                  {{-- <li class="menu-item ">
                      <a href="" class="nav-link">
                          Sliders
                      </a>
                  </li> --}}

              </ul>
          </li>


          <li class="menu-header text-uppercase">
              <span class="menu-header-text">System Settings</span>
          </li>

          <li class="menu-item">
              <a href="javascript:void(0);" class="nav-link menu-toggle">
                  <div>
                      <i class="fa-solid fa-users"></i>
                      Users
                  </div>

                  <i class="fa-solid arrow fa-caret-right"></i>
              </a>
              <ul class="menu-sub hide">
                  <li class="menu-item ">
                      <a href="" class="nav-link">
                          USers
                      </a>
                  </li>
                  <li class="menu-item ">
                      <a href="" class="nav-link">
                          Roles
                      </a>
                  </li>
              </ul>
          </li>

          <li class="menu-item">
              <a href="javascript:void(0);" class="nav-link menu-toggle">
                  <div>
                      <i class="fa-solid fa-sliders"></i>
                      Store settings
                  </div>

                  <i class="fa-solid arrow fa-caret-right"></i>
              </a>
              <ul class="menu-sub hide">
                  <li class="menu-item ">
                      <a href="" class="nav-link">
                          front Store
                      </a>
                  </li>
                  <li class="menu-item ">
                      <a href="" class="nav-link">
                          Theme Settings
                      </a>
                  </li>
              </ul>
          </li>

          <li class="menu-item">
              <a href="javascript:void(0);" class="nav-link menu-toggle">
                  <div>
                      <i class="fa-solid fa-screwdriver-wrench"></i>
                      Main Settings
                  </div>

                  <i class="fa-solid arrow fa-caret-right"></i>
              </a>
              <ul class="menu-sub hide">
                  <li class="menu-item ">
                      <a href="" class="nav-link">
                        Genarel
                      </a>
                  </li>
                  <li class="menu-item ">
                      <a href="" class="nav-link">
                        Social Logins
                      </a>
                  </li>

                  <li class="menu-item ">
                    <a href="" class="nav-link">
                        Shipping Methods
                    </a>
                </li>

                <li class="menu-item ">
                    <a href="" class="nav-link">
                        Payment Methods
                    </a>
                </li>


              </ul>
          </li>




      </ul>
  </div>
