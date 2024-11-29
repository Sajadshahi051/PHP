<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت‌نام</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>فرم ثبت‌نام</h2>
        <form id="registerForm">
            <label for="username">نام کاربری:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="ثبت‌نام">
        </form>

        <div id="response"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(e) {
                e.preventDefault(); // جلوگیری از ارسال فرم به طور معمول

                var formData = $(this).serialize(); // داده‌های فرم

                $.ajax({
                    url: 'register.php', // فایل PHP که داده‌ها را پردازش می‌کند
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#response').html(response); // نمایش پاسخ سرور
                    },
                    error: function(xhr, status, error) {
                        $('#response').html('خطا در ارسال فرم.');
                    }
                });
            });
        });
    </script>
</body>
</html>
