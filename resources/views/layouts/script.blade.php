<!-- Vendor -->
<script src="{{asset("assets/libs/jquery/jquery.min.js")}}"></script>
<script src="{{asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/libs/simplebar/simplebar.min.js")}}"></script>
<script src="{{asset("assets/libs/node-waves/waves.min.js")}}"></script>
<script src="{{asset("assets/libs/waypoints/lib/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("assets/libs/jquery.counterup/jquery.counterup.min.js")}}"></script>
<script src="{{asset("assets/libs/feather-icons/feather.min.js")}}"></script>

<!-- Apexcharts JS -->
<script src="{{asset("assets/libs/apexcharts/apexcharts.min.js")}}"></script>

<!-- for basic area chart -->
<script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

<!-- Widgets Init Js -->
<script src="{{asset("assets/js/pages/analytics-dashboard.init.js")}}"></script>

<!-- Datatables js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<!-- dataTables.bootstrap5 -->
<script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

<!-- buttons.colVis -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>

<!-- buttons.bootstrap5 -->
<script src="{{asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>

<!-- dataTables.keyTable -->
<script src="{{asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js')}}"></script>

<!-- dataTable.responsive -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>

<!-- dataTables.select -->
<script src="{{asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js')}}"></script>

<!-- Datatable Demo App Js -->
<script src="{{asset('assets/js/pages/datatable.init.js')}}"></script>

<!-- Flatpickr Timepicker Plugin js -->
<script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

<script src="{{asset('assets/js/pages/form-picker.js')}}"></script>

<!-- App js-->
<script src="{{asset("assets/js/app.js")}}"></script>

<script>
    function onLoginPasswordVisible() {
        const lockIcon = document.getElementById('login-lock-icon');
        const password = document.getElementById('password');

            if (password.getAttribute('type') === 'password') {
                password.setAttribute('type', 'text');
                lockIcon.classList.remove("mdi-lock-outline");
                lockIcon.classList.add("mdi-lock-open-outline");
            } else {
                password.setAttribute('type', 'password');
                lockIcon.classList.remove("mdi-lock-open-outline");
                lockIcon.classList.add("mdi-lock-outline");
            }
    }

    function onRegisterPasswordVisible() {
        const registerLockIcon = document.getElementById('register-lock-icon');
        const registerPassword = document.getElementById('register-password');
            if (registerPassword.getAttribute('type') === 'password') {
                registerPassword.setAttribute('type', 'text');
                registerLockIcon.classList.remove('mdi-lock-outline');
                registerLockIcon.classList.add('mdi-lock-open-outline');
            } else {
                registerPassword.setAttribute('type', 'password');
                registerLockIcon.classList.remove('mdi-lock-open-outline');
                registerLockIcon.classList.add('mdi-lock-outline');
            }
    }

    function onOldPasswordVisible() {
        const oldPassword = document.getElementById('oldPassword');
        const lockIcon = document.getElementById('old-lock-icon');

        if (oldPassword.getAttribute('type') === 'password') {
            oldPassword.setAttribute('type', 'text');
            lockIcon.classList.remove("mdi-lock-outline");
            lockIcon.classList.add("mdi-lock-open-outline");
        } else {
            oldPassword.setAttribute('type', 'password');
            lockIcon.classList.remove("mdi-lock-open-outline");
            lockIcon.classList.add("mdi-lock-outline");
        }
    }

    function onNewPasswordVisible() {
        const newPassword = document.getElementById('newPassword');
        const lockIcon = document.getElementById('new-lock-icon');

        if (newPassword.getAttribute('type') === 'password') {
            newPassword.setAttribute('type', 'text');
            lockIcon.classList.remove("mdi-lock-outline");
            lockIcon.classList.add("mdi-lock-open-outline");
        } else {
            newPassword.setAttribute('type', 'password');
            lockIcon.classList.remove("mdi-lock-open-outline");
            lockIcon.classList.add("mdi-lock-outline");
        }
    }

    function onConfirmPasswordVisible() {
        const confirmPassword = document.getElementById('confirmPassword');
        const lockIcon = document.getElementById('confirm-lock-icon');

        if (confirmPassword.getAttribute('type') === 'password') {
            confirmPassword.setAttribute('type', 'text');
            lockIcon.classList.remove("mdi-lock-outline");
            lockIcon.classList.add("mdi-lock-open-outline");
        } else {
            confirmPassword.setAttribute('type', 'password');
            lockIcon.classList.remove("mdi-lock-open-outline");
            lockIcon.classList.add("mdi-lock-outline");
        }
    }

</script>
