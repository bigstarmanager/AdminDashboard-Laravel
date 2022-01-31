<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; {{date("Y");}} <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
          target="_blank">Big-Star</a> All rights reserved.
      </span>
      <span class="right hide-on-small-only">
        Design and Developed by <a href="https://pixinvent.com/">Big-Star</a>
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->