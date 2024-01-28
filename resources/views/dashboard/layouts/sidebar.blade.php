<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active':''}}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/submit') ? 'active':''}}" href="/dashboard/submit">
              <span data-feather="file"></span>
              Submit Dokumen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/tracking') ? 'active':''}}" href="/dashboard/tracking">
              <span data-feather="file-text"></span>
              Tracking Dokumen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/assessment') ? 'active':''}}" href="/dashboard/assessment">
              <span data-feather="file"></span>
              Assessment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/onboarding') ? 'active':''}}" href="/dashboard/onboarding">
              <span data-feather="file"></span>
              Onboarding
            </a>
          </li>
        </ul>
      </div>
    </nav>