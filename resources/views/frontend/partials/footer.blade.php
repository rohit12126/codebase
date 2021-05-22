<ul class="footer-nav-ul">
      <li>
          <a href="tel:{{$setting->contact ?? '+49 (0)30 60 988 588'}}" class="font-weight-bold">{{$setting->contact ?? '+49 (0)30 60 988 588'}}</a>
      </li>
      <li>
          <a href="mailto:{{$setting->email ?? 'service@customcloset.com'}}" class="text-underline">{{$setting->email ?? 'service@customcloset.com'}}</a>
      </li>
  </ul>
  <div class="d-flex w-100 align-items-center mt-4 footer-socialicon-wrapper">
      <span class="footer-socialicon">
          <a href="{{$setting->facebook_url ?? 'https://www.facebook.com/'}}" title="Connect on Facebook"><img src="{{URL::asset('/images/icon/facebook.png')}}" target="_blank" alt=""></a>
      </span>
      <span class="footer-socialicon">
          <a href="{{$setting->instagram_url ?? 'https://www.instagram.com/'}}" title="Follow us on Instagram"><img src="{{URL::asset('/images/icon/instagram.png')}}" target="_blank" alt=""></a>
      </span>
      <span class="footer-socialicon">
          <a href="{{$setting->pinterest_url ?? 'https://www.pinterest.com/'}}" title="Connect on Pinterest"><img src="{{URL::asset('/images/icon/pintrest.png')}}" target="_blank" alt=""></a>
      </span>
  </div>
