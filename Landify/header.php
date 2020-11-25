<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mediablaze</title>

    <!-- Don't worry, your new site won't be crawled by Google! -->
    <meta name="robots" content="noindex">
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

<header>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="wrap flex-center nav main-nav">

    <!-- Hamburger -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>

    <div class="collapse navbar-collapse nav-menu nav-box" id="navbarNavDropdown">
      <ul class="navbar-nav flex">
        <li class="nav-item active">
          <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="sr-only">
            Pricing
          </a>
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Lorem ipsum</a>
            <a class="dropdown-item" href="#">dolor sit amet</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">consectetur adipisicing</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" class="sr-only">Contact</a>
        </li>
      </ul>
    </div>

    <div class="nav-center flex">
      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.57534 28H10.0685C14.57 28 18.2192 24.3508 18.2192 19.8493H8.72603C4.22453 19.8493 0.57534 23.4985 0.57534 28Z" fill="#F22BB2"/>
      <path d="M1 8.15069V20.137C5.5015 20.137 9.15069 16.4878 9.15069 11.9863V0C4.64919 0 1 3.64919 1 8.15069Z" fill="#8C30F5"/>
      <path d="M27.4247 0H17.9315C13.43 0 9.78082 3.64919 9.78082 8.15068H19.274C23.7755 8.15068 27.4247 4.5015 27.4247 0Z" fill="#FE9A22"/>
      <path d="M27.4247 19.3699V7.38358C22.9232 7.38358 19.274 11.0328 19.274 15.5343V27.5206C23.7755 27.5206 27.4247 23.8714 27.4247 19.3699Z" fill="#2EC5CE"/>
      </svg>
      <svg width="68" height="20" viewBox="0 0 68 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3.4 11.92V0.999989H0.200001V15H8.4V11.92H3.4Z" fill="#0B0D17"/>
      <path d="M16.8717 4.99999V5.93999C16.2117 5.17999 15.2317 4.71999 13.8917 4.71999C11.2717 4.71999 9.11172 7.01999 9.11172 9.99999C9.11172 12.98 11.2717 15.28 13.8917 15.28C15.2317 15.28 16.2117 14.82 16.8717 14.06V15H19.8717V4.99999H16.8717ZM14.4917 12.44C13.1117 12.44 12.1117 11.5 12.1117 9.99999C12.1117 8.49999 13.1117 7.55999 14.4917 7.55999C15.8717 7.55999 16.8717 8.49999 16.8717 9.99999C16.8717 11.5 15.8717 12.44 14.4917 12.44Z" fill="#0B0D17"/>
      <path d="M27.9327 4.71999C26.6127 4.71999 25.6127 5.19999 25.0727 5.93999V4.99999H22.0727V15H25.0727V9.53999C25.0727 8.11999 25.8327 7.47999 26.9327 7.47999C27.8927 7.47999 28.6727 8.05999 28.6727 9.29999V15H31.6727V8.85999C31.6727 6.15999 29.9527 4.71999 27.9327 4.71999Z" fill="#0B0D17"/>
      <path d="M40.9928 0.999989V5.93999C40.3328 5.17999 39.3528 4.71999 38.0128 4.71999C35.3928 4.71999 33.2328 7.01999 33.2328 9.99999C33.2328 12.98 35.3928 15.28 38.0128 15.28C39.3528 15.28 40.3328 14.82 40.9928 14.06V15H43.9928V0.999989H40.9928ZM38.6128 12.44C37.2328 12.44 36.2328 11.5 36.2328 9.99999C36.2328 8.49999 37.2328 7.55999 38.6128 7.55999C39.9928 7.55999 40.9928 8.49999 40.9928 9.99999C40.9928 11.5 39.9928 12.44 38.6128 12.44Z" fill="#0B0D17"/>
      <path d="M47.6937 4.11999C48.6737 4.11999 49.4938 3.29999 49.4938 2.31999C49.4938 1.33999 48.6737 0.519989 47.6937 0.519989C46.7137 0.519989 45.8937 1.33999 45.8937 2.31999C45.8937 3.29999 46.7137 4.11999 47.6937 4.11999ZM46.1937 15H49.1937V4.99999H46.1937V15Z" fill="#0B0D17"/>
      <path d="M56.8891 3.59999V0.719989C53.5691 0.519989 52.0291 2.19999 52.0291 4.99999H50.6891V7.87999H52.0291V15H55.0291V7.87999H56.8891V4.99999H55.0291C55.0291 3.83999 55.7691 3.49999 56.8891 3.59999Z" fill="#0B0D17"/>
      <path d="M64.6813 4.99999L62.8013 11.12L60.5812 4.99999H57.2812L61.2612 14.54C60.8213 15.76 60.1613 16.2 58.7612 16.2V19C61.5612 19.14 63.3413 17.88 64.4613 14.7L67.8813 4.99999H64.6813Z" fill="#0B0D17"/>
      </svg>
    </div>

    <div class="collapse navbar-collapse nav-socials nav-box" id="navbarNavDropdown">
      <ul class="navbar-nav flex">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.00081 0.466675C6.68327 0.466675 6.39243 0.476808 5.48219 0.518231C4.57374 0.559831 3.95364 0.703655 3.41106 0.914679C2.84981 1.13264 2.37372 1.4242 1.8994 1.89869C1.42473 2.37301 1.13317 2.8491 0.914502 3.41017C0.702944 3.95293 0.558942 4.57321 0.518053 5.4813C0.477342 6.39154 0.466675 6.68256 0.466675 9.0001C0.466675 11.3176 0.476986 11.6076 0.518231 12.5178C0.560009 13.4263 0.703833 14.0464 0.914679 14.589C1.13282 15.1502 1.42437 15.6263 1.89887 16.1006C2.37301 16.5753 2.8491 16.8676 3.40999 17.0855C3.95293 17.2965 4.57321 17.4404 5.48148 17.482C6.39171 17.5234 6.68238 17.5335 8.99974 17.5335C11.3175 17.5335 11.6074 17.5234 12.5176 17.482C13.4261 17.4404 14.0469 17.2965 14.5898 17.0855C15.1509 16.8676 15.6263 16.5753 16.1004 16.1006C16.5751 15.6263 16.8667 15.1502 17.0853 14.5891C17.2951 14.0464 17.4391 13.4261 17.4818 12.518C17.5227 11.6078 17.5333 11.3176 17.5333 9.0001C17.5333 6.68256 17.5227 6.39171 17.4818 5.48148C17.4391 4.57303 17.2951 3.95293 17.0853 3.41035C16.8667 2.8491 16.5751 2.37301 16.1004 1.89869C15.6258 1.42402 15.1511 1.13246 14.5893 0.914679C14.0453 0.703655 13.4249 0.559831 12.5164 0.518231C11.6062 0.476808 11.3164 0.466675 8.99814 0.466675H9.00081ZM8.23525 2.00444C8.46245 2.00409 8.71597 2.00444 9.00077 2.00444C11.2792 2.00444 11.5492 2.01262 12.449 2.05351C13.281 2.09156 13.7326 2.23058 14.0334 2.34738C14.4316 2.50205 14.7155 2.68694 15.014 2.98561C15.3127 3.28428 15.4976 3.56873 15.6526 3.96695C15.7694 4.2674 15.9086 4.71896 15.9464 5.55097C15.9873 6.45054 15.9962 6.72076 15.9962 8.99812C15.9962 11.2755 15.9873 11.5457 15.9464 12.4453C15.9084 13.2773 15.7694 13.7288 15.6526 14.0293C15.4979 14.4275 15.3127 14.7111 15.014 15.0096C14.7153 15.3082 14.4318 15.4931 14.0334 15.6478C13.7329 15.7651 13.281 15.9038 12.449 15.9418C11.5494 15.9827 11.2792 15.9916 9.00077 15.9916C6.72217 15.9916 6.45212 15.9827 5.55256 15.9418C4.72055 15.9034 4.26899 15.7644 3.96801 15.6476C3.56978 15.4929 3.28533 15.3081 2.98666 15.0094C2.68799 14.7107 2.5031 14.427 2.34808 14.0286C2.23128 13.7281 2.09208 13.2766 2.05421 12.4446C2.01332 11.545 2.00514 11.2748 2.00514 8.99598C2.00514 6.7172 2.01332 6.4484 2.05421 5.54884C2.09226 4.71683 2.23128 4.26527 2.34808 3.96447C2.50275 3.56624 2.68799 3.28179 2.98666 2.98312C3.28533 2.68445 3.56978 2.49956 3.96801 2.34454C4.26881 2.2272 4.72055 2.08853 5.55256 2.05031C6.33977 2.01476 6.64484 2.00409 8.23525 2.00231V2.00444ZM13.5558 3.42135C12.9905 3.42135 12.5318 3.87949 12.5318 4.44501C12.5318 5.01035 12.9905 5.46902 13.5558 5.46902C14.1212 5.46902 14.5799 5.01035 14.5799 4.44501C14.5799 3.87967 14.1212 3.42135 13.5558 3.42135ZM9.00082 4.61781C6.58071 4.61781 4.61855 6.57996 4.61855 9.00007C4.61855 11.4202 6.58071 13.3815 9.00082 13.3815C11.4209 13.3815 13.3824 11.4202 13.3824 9.00007C13.3824 6.57996 11.4209 4.61781 9.00082 4.61781ZM9.00079 6.1556C10.5717 6.1556 11.8453 7.42903 11.8453 9.00007C11.8453 10.5709 10.5717 11.8445 9.00079 11.8445C7.42975 11.8445 6.15632 10.5709 6.15632 9.00007C6.15632 7.42903 7.42975 6.1556 9.00079 6.1556Z" fill="white"/>
            </svg>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5333 8.98818C17.5333 9.56527 17.4746 10.1416 17.3592 10.7033C17.2467 11.2517 17.08 11.7901 16.8617 12.3048C16.6483 12.8104 16.3837 13.2976 16.0745 13.752C15.77 14.2035 15.4191 14.627 15.0337 15.0131C14.6474 15.3976 14.2224 15.7475 13.7711 16.0534C13.3152 16.3604 12.8273 16.6246 12.3215 16.8389C11.806 17.0561 11.2664 17.2226 10.7184 17.3349C10.1559 17.4506 9.57755 17.5096 8.99962 17.5096C8.42126 17.5096 7.8429 17.4506 7.28121 17.3349C6.73244 17.2226 6.19283 17.0561 5.67779 16.8389C5.17195 16.6246 4.68357 16.3604 4.22772 16.0534C3.77645 15.7475 3.35143 15.3976 2.96599 15.0131C2.58015 14.627 2.22928 14.2035 1.92427 13.752C1.61675 13.2976 1.35172 12.8104 1.13755 12.3048C0.919183 11.7901 0.752114 11.2517 0.639188 10.7033C0.525025 10.1416 0.466675 9.56527 0.466675 8.98818C0.466675 8.41065 0.524992 7.83313 0.639221 7.27261C0.752147 6.7242 0.919216 6.18496 1.13759 5.67111C1.35175 5.16516 1.61678 4.67751 1.9243 4.22313C2.22931 3.77127 2.58018 3.3485 2.96602 2.96195C3.35146 2.57746 3.77648 2.2284 4.22775 1.923C4.6836 1.61466 5.17198 1.35047 5.67783 1.13575C6.19286 0.918096 6.73244 0.751269 7.28124 0.639772C7.84294 0.524941 8.4213 0.466675 8.99966 0.466675C9.57758 0.466675 10.1559 0.524941 10.7185 0.639772C11.2664 0.751302 11.806 0.918129 12.3215 1.13575C12.8273 1.35044 13.3153 1.61466 13.7711 1.923C14.2224 2.2284 14.6475 2.57746 15.0337 2.96195C15.4191 3.3485 15.77 3.77127 16.0746 4.22313C16.3837 4.67751 16.6483 5.16519 16.8617 5.67111C17.08 6.18496 17.2467 6.7242 17.3592 7.27261C17.4746 7.83313 17.5333 8.41065 17.5333 8.98818ZM5.89026 2.40605C3.85805 3.36433 2.34131 5.23422 1.86836 7.48775C2.06048 7.48942 5.0973 7.52771 8.59622 6.59938C7.33492 4.36166 5.98735 2.53549 5.89026 2.40605ZM9.2 7.71995C5.44774 8.84169 1.84711 8.76097 1.71795 8.75601C1.71585 8.83422 1.71211 8.90993 1.71211 8.98817C1.71211 10.8576 2.41839 12.5619 3.57929 13.8506C3.57678 13.8468 5.57108 10.3138 9.50377 9.04393C9.59876 9.01232 9.69546 8.984 9.79128 8.95655C9.60838 8.54298 9.40875 8.12855 9.2 7.71995ZM13.8124 3.52659C12.5293 2.39689 10.8447 1.71164 8.9996 1.71164C8.40748 1.71164 7.83286 1.78321 7.28242 1.91552C7.39157 2.062 8.76042 3.87529 10.0067 6.16041C12.7565 5.13103 13.7944 3.55321 13.8124 3.52659ZM10.288 10.1624C10.2718 10.1677 10.2556 10.1724 10.2397 10.1782C5.93997 11.675 4.53583 14.6914 4.52064 14.7244C5.75781 15.6851 7.30956 16.2647 8.99965 16.2647C10.0088 16.2647 10.9701 16.0595 11.8448 15.688C11.7368 15.0522 11.3135 12.8237 10.288 10.1624ZM13.0719 15.0231C14.7082 13.9205 15.8703 12.1696 16.1945 10.1415C16.0445 10.0933 14.0057 9.44874 11.6535 9.82531C12.6093 12.4484 12.9977 14.5846 13.0719 15.0231ZM10.5676 7.24475C10.7368 7.59178 10.9006 7.94498 11.0518 8.29995C11.1056 8.42729 11.1581 8.55212 11.2093 8.67693C13.7128 8.36235 16.1792 8.89161 16.2846 8.91323C16.2679 7.18815 15.65 5.60493 14.6275 4.36543C14.6137 4.38494 13.4449 6.07136 10.5676 7.24475Z" fill="white"/>
            </svg>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5208 4.00501L7.55438 4.55864L6.99479 4.49085C4.95791 4.23098 3.17843 3.34968 1.66756 1.86955L0.928908 1.13514L0.73865 1.67748C0.33575 2.88644 0.593158 4.16319 1.43253 5.02189C1.8802 5.49643 1.77948 5.56423 1.00725 5.28176C0.73865 5.19137 0.503625 5.12358 0.481242 5.15747C0.4029 5.23656 0.6715 6.26475 0.884142 6.6715C1.17513 7.23643 1.76828 7.79007 2.4174 8.11773L2.96579 8.3776L2.31668 8.3889C1.68994 8.3889 1.66756 8.4002 1.73471 8.63747C1.95854 9.37189 2.84268 10.1515 3.82755 10.4905L4.52143 10.7277L3.91708 11.0893C3.02175 11.609 1.96973 11.9028 0.917717 11.9254C0.414092 11.9367 0 11.9819 0 12.0158C0 12.1288 1.36538 12.7615 2.15999 13.0101C4.54382 13.7445 7.37531 13.4281 9.50173 12.174C11.0126 11.2814 12.5235 9.50747 13.2286 7.79007C13.6091 6.87488 13.9896 5.20267 13.9896 4.40046C13.9896 3.88072 14.0232 3.81293 14.6499 3.1915C15.0192 2.82994 15.3662 2.43449 15.4333 2.3215C15.5452 2.10683 15.534 2.10683 14.9633 2.2989C14.012 2.63786 13.8777 2.59267 14.3477 2.08423C14.6947 1.72267 15.1088 1.06735 15.1088 0.875268C15.1088 0.841372 14.9409 0.897865 14.7506 0.999553C14.5492 1.11254 14.1015 1.28202 13.7658 1.38371L13.1614 1.57579L12.613 1.20293C12.3108 0.999553 11.8856 0.77358 11.6617 0.705787C11.0909 0.547606 10.218 0.570203 9.70318 0.750982C8.30422 1.25942 7.42008 2.57007 7.5208 4.00501Z" fill="white"/>
            </svg>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6677 0.499581C16.4021 0.701091 16.9804 1.29484 17.1767 2.04884C17.5333 3.41539 17.5333 6.2667 17.5333 6.2667C17.5333 6.2667 17.5333 9.1179 17.1767 10.4845C16.9804 11.2386 16.4021 11.8323 15.6677 12.0339C14.3369 12.4 9.00001 12.4 9.00001 12.4C9.00001 12.4 3.66309 12.4 2.33218 12.0339C1.59783 11.8323 1.0195 11.2386 0.823232 10.4845C0.466675 9.1179 0.466675 6.2667 0.466675 6.2667C0.466675 6.2667 0.466675 3.41539 0.823232 2.04884C1.0195 1.29484 1.59783 0.701091 2.33218 0.499581C3.66309 0.133362 9.00001 0.133362 9.00001 0.133362C9.00001 0.133362 14.3369 0.133362 15.6677 0.499581ZM7.40002 3.86664V9.19997L11.6667 6.53341L7.40002 3.86664Z" fill="white"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>

    </div>
  </nav>
  <!-- End of Navbar -->

</header>
<!-- End of Header -->
