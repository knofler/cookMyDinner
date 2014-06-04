<!-- NAVBAR
================================================== -->
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{URL::route('home')}}">Cook my dinner</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="{{URL::route('poll')}}">Poll</a></li>  
                  <li><a href="{{URL::route('shop')}}">Shop</a></li>
                  <li><a href="{{URL::route('blog')}}">Blog</a></li>
                  <li><a href="{{URL::route('timeline')}}">Timeline</a></li>
                  <li><a href="{{URL::route('comment')}}">Comment</a></li>
                  <li><a href="{{URL::route('comment_timeline')}}">Comment Timeline</a></li>
                  <li><a href="{{URL::route('chat')}}">Chat</a></li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li class="active"><a href="{{URL::route('profile')}}">Status</a></li>
                    <li><a href="{{URL::route('account-create')}}">Create</a></li>
                    <li><a href="{{URL::route('users')}}">Users</a></li>
                    <li><a href="{{URL::route('account-login')}}">Login</a></li>
                    <li><a  href="{{URL::route('eloquent')}}">DB Access</a></li>
                    <li><a  href="{{URL::route('data_display')}}">DB Data</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="{{URL::route('invoice')}}">Invoice</a></li>
                    <li><a href="{{URL::route('shopstatus')}}">Shop Status</a></li>
                    <li><a href="{{URL::route('pricetable')}}">Price Table</a></li>
                    <li><a href="{{URL::route('pricecard')}}">Price Card</a></li>
                    <li><a href="{{URL::route('stripe_payment')}}">Payment</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
