Cách đóng góp mã nguồn của tôi
===

Tài liệu này giới thiệu thành phần và cơ chế hoạt động của nhóm ThinkPHP, mã bạn gửi sẽ mang lại lợi ích gì cho dự án ThinkPHP và cách gia nhập hàng ngũ của chúng tôi.

## Đóng góp code qua Github

ThinkPHP hiện đang sử dụng Git để kiểm soát phiên bản chương trình. Nếu bạn muốn đóng góp mã nguồn cho ThinkPHP, vui lòng hiểu biết chung về cách sử dụng Git. Chúng tôi hiện đang lưu trữ dự án trên GitHub và bất kỳ người dùng GitHub nào cũng có thể đóng góp mã cho chúng tôi.

Cách thức tham gia rất đơn giản, `fork` mã ThinkPHP vào kho của bạn, gửi mã đó sau khi sửa đổi và khởi tạo ứng dụng `pull request` cho chúng tôi, chúng tôi sẽ xem xét mã kịp thời và xử lý đơn đăng ký của bạn. Sau khi xét duyệt xong, mã của bạn sẽ được `sáp nhập` vào kho của chúng tôi, do đó bạn sẽ tự động xuất hiện trong danh sách cộng tác viên, rất tiện lợi.

Chúng tôi hy vọng rằng mã bạn đóng góp phù hợp với:

* Chuẩn mã hóa ThinkPHP
* Nhận xét phù hợp để người khác hiểu
* Tuân thủ thỏa thuận mã nguồn mở Apache2

**Nếu bạn muốn biết thêm chi tiết hoặc có bất kỳ câu hỏi nào, vui lòng đọc tiếp bên dưới**

### Các biện pháp phòng ngừa

* Chuẩn định dạng mã của dự án này là [**PSR-2**](http://www.kancloud.cn/thinkphp/php-fig-psr/3141);
* Tên lớp và tên tệp lớp tuân theo [**PSR-4**](http://www.kancloud.cn/thinkphp/php-fig-psr/3144);
* Đối với sự cố, vui lòng sử dụng tiêu đề cam kết, chẳng hạn như `fix #xxx(ID vấn đề)` để đóng sự cố trực tiếp.
* Hệ thống sẽ tự động kiểm tra sửa đổi trên PHP 5.4 5.5 5.6 7.0 và HHVM, trong đó kiểm tra trong HHVM được phép báo cáo lỗi, vui lòng đảm bảo rằng sửa đổi của bạn tuân theo đặc tả cú pháp của PHP 5.4 ~ 5.6 và PHP 7.0;
* Quản trị viên sẽ không hợp nhất các sửa đổi gây ra lỗi CI. Nếu CI không thành công, vui lòng kiểm tra mã nguồn của chính bạn hoặc sửa đổi [tệp kiểm tra đơn vị] (kiểm tra) tương ứng;

## Các vấn đề về GitHub

GitHub cung cấp chức năng Sự cố, có thể được sử dụng để:

* nộp một lỗi
* Đề xuất cải tiến tính năng
* Phản hồi về trải nghiệm người dùng

Chức năng này không nên được sử dụng để:

  * Đưa ra các nhận xét sửa đổi (liên quan đến chữ ký mã và các vấn đề hồi cứu sửa đổi)
  * nhận xét không thân thiện

## Sửa đổi nhanh

**GitHub cung cấp khả năng chỉnh sửa tệp nhanh chóng**

1. Đăng nhập vào tài khoản GitHub của bạn;
2. Duyệt tệp dự án và tìm tệp cần sửa đổi;
3. Nhấp vào biểu tượng bút chì ở góc trên bên phải để sửa đổi;
4. Điền vào nội dung liên quan của `Cam kết thay đổi` (Tiêu đề là bắt buộc);
5. Gửi các thay đổi và đợi xác thực CI và hợp nhất quản trị viên.

**Nếu bạn cần gửi một số lượng lớn bản sửa đổi cùng một lúc, vui lòng đọc tiếp bên dưới**

## quá trình hoàn tất

1. `phân nhánh` dự án này;
2. Sao chép (`clone`) dự án `fork` của bạn sang địa phương;
3. Tạo một nhánh mới (`branch`) và kiểm tra (`checkout`) nhánh mới;
4. Thêm dự án này vào kho lưu trữ git cục bộ của bạn dưới dạng ngược dòng (`ngược dòng`);
5. Thực hiện sửa đổi, nếu sửa đổi của bạn bao gồm thêm hoặc xóa các phương thức hoặc chức năng, vui lòng nhớ sửa đổi [tệp kiểm tra đơn vị] (kiểm tra);
6. Rebase (`rebase`) nhánh của bạn thành nhánh chính ngược dòng;
7. `đẩy` kho lưu trữ cục bộ của bạn lên GitHub;
8. Gửi `yêu cầu kéo`;
9. Đợi xác minh CI (nếu không được thông qua, lặp lại bước 5~7, GitHub sẽ tự động cập nhật `pull request` của bạn);
10. Đợi quản trị viên xử lý và kịp thời `rebase` nhánh của bạn thành nhánh chính ngư