@if ($message = Session::get('sucsess'))
<div class="alert alert-success" id="success-alert">
    <div style="display: flex; justify-content: space-between; margin-top: 15px;">
        <p>{{ $message }}</p>
        <p id="countdown"></p>
    </div>
</div>
<script>
    var timeLeft = 3;
            var countdown = document.getElementById('countdown');
            var alertBox = document.getElementById('success-alert');
            function updateCountdown() {
                if (timeLeft > 0) {
                    countdown.innerHTML = timeLeft;
                    timeLeft -= 1;
                    setTimeout(updateCountdown, 1000);
                } else {
                    alertBox.style.display = 'none';
                }
            }
    
            updateCountdown();
</script>
@endif