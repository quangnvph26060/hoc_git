
// /**
//  *  comment git cơ bản hay dùng
//  * 1. git init : tạo ra 1  tạo kho lưu trữ mới và trống
//  * 2. git clone lấy từ trên mạng về 
//  * 3. git pull đồng bộ lên mạng
//  * 4. git add thêm tất cả các tệp đã sửa đổi hoặc mới hoặc chưa được theo dõi
//  * 5.  git commit   Lệnh này thúc đẩy các thay đổi của bạn và thiết lập đối tượng cam kết mới. Đối tượng này không thay đổi trừ khi bạn cam kết thực hiện bất kỳ thay đổi nào.
//  * 6. git branch  Đây là một lệnh đơn giản liệt kê tất cả các nhánh.
//     Liệt kê các nhánh của thư mục làm việc, các dự án hoặc khu vực tổ chức
//  * 7. git push sử dụng để đẩy các commit mới ở máy trạm (local repo) lên server (remote repo)
//  * 8. git log check xem trạng thái file như thế nào 
//  *  
//  * 
//  các bước đẩy lên git 
//  b1 : vào terminal nhập git init 
//  b2: kiểm tra trạng thái git status
//  b3: thêm file muốn đẩy lên git : git add 'tên file' 

//  b4:  kiểm tra trạng thái git status xem đc thêm hay chwua , chay git commit -m "tên tác vụ là gì "
//  b5: chạy git log 
//  b6 : vào file git muốn đẩy lên copy : git remote add origin https://github.com/quangnvph26060/hoc_git.git
//  rồi chạy 
//  b7: copy và chạy câu lệnh dưới : git push -u origin main

//  nếu muốn thêm file khác chỉ cần git add . nó sẽ add toàn bộ các file vào 
//  sau đó git commit -m lưu thay đổi vào repositores vào trong máy sau chạy gp
//  *//


// git init
// git remote add origin https://github.com/quangnvph26060/hoc_git.git
// git add . lấy tất các file
// git commit -m "day_len_git" 
// git push -u origin main nếu lỗi thì chạy câu lệnh git branch -M main để khai báo cho nó 1 nhánh  ,
// sau đó chạy  lại git push -u origin main 

/////////////////////////////////////////////////////
// sau khi đẩy lên git và ta lại vào code tiếp , ta muốn đẩy lên git tiếp ,  ta dùng 3 câu lệnh git add . 
// // git commit -m "day_len_git"
// // git  push -u origin
