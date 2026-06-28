<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kích hoạt tài khoản</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:Arial, Helvetica, sans-serif;">

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color:#f4f6f8; padding:40px 0;">
        <tr>
            <td align="center">

                <!-- Container -->
                <table role="presentation" width="600" cellspacing="0" cellpadding="0"
                    style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 6px 20px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background:linear-gradient(135deg,#28a745,#20c997); padding:25px; text-align:center; color:#fff;">
                            <h2 style="margin:0; font-size:22px;">Kích hoạt tài khoản</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#333; font-size:15px; line-height:1.6;">

                            <p style="margin-top:0;">Xin chào, <strong>{{ $user->name }}</strong>,</p>

                            <p>
                                Cảm ơn bạn đã đăng ký tại website của chúng tôi.
                                Để bắt đầu sử dụng tài khoản, vui lòng xác thực email bằng cách nhấn vào nút bên dưới.
                            </p>

                            <div style="text-align:center; margin:30px 0;">
                                <a href="{{ url('/activate/' . $token) }}"
                                    style="
                                        display:inline-block;
                                        padding:12px 25px;
                                        background:#28a745;
                                        color:#ffffff;
                                        text-decoration:none;
                                        border-radius:6px;
                                        font-weight:bold;
                                        font-size:15px;
                                    ">
                                    Kích hoạt tài khoản
                                </a>
                            </div>

                            <p>
                                Nếu bạn không thực hiện yêu cầu này, bạn có thể bỏ qua email này.
                            </p>

                            <p style="margin-bottom:0;">
                                Trân trọng,<br>
                                <strong>Đội ngũ hỗ trợ khách hàng</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f3f5; text-align:center; padding:15px; font-size:12px; color:#888;">
                            © {{ date('Y') }} Veggie Shop. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>