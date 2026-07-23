<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản hồi liên hệ</title>
</head>

<body style="margin:0; padding:0; background-color:#f5f7fa; font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
        <tr>
            <td style="text-align:center;">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#4CAF50; padding:25px; text-align:center;">
                            <h1 style="margin:0; color:#ffffff; font-size:24px;">
                                Veggie Shop
                            </h1>
                            <p style="margin:8px 0 0; color:#eaffea; font-size:14px;">
                                Phản hồi yêu cầu liên hệ của bạn
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:30px; color:#333333;">

                            <h2 style="margin-top:0; color:#333333; font-size:20px;">
                                Xin chào quý khách,
                            </h2>

                            <p style="font-size:16px; line-height:1.6;">
                                Cảm ơn bạn đã liên hệ với
                                <strong style="color:#4CAF50;">
                                    Veggie Shop
                                </strong>.
                                Chúng tôi xin gửi đến bạn phản hồi như sau:
                            </p>

                            <div
                                style="
                                margin:20px 0;
                                padding:20px;
                                background:#f8f9fa;
                                border-left:4px solid #4CAF50;
                                border-radius:6px;
                                font-size:15px;
                                line-height:1.6;
                            ">
                                {!! $messageContent !!}
                            </div>

                            <p style="font-size:16px; line-height:1.6;">
                                Nếu bạn cần thêm hỗ trợ, vui lòng phản hồi lại email này.
                                Chúng tôi luôn sẵn sàng hỗ trợ bạn.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td
                            style="
                            background:#f1f3f5;
                            padding:20px;
                            text-align:center;
                            color:#777;
                            font-size:13px;
                        ">
                            <p style="margin:0;">
                                © {{ date('Y') }} Veggie Shop. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
