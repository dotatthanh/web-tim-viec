<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
        	['name'=>'Nhân viên kinh doanh','code'=>'nhan-vien-kinh-doanh'],
        	['name'=>'Kế toán-Kiểm toán','code'=>'ke-toan-kiem-toan'],
        	['name'=>'Hành chính-Văn phòng','code'=>'hanh-chinh-van-phong'],
        	['name'=>'Bán hàng','code'=>'ban-hang'],
        	['name'=>'Tư vấn','code'=>'tu-van'],
        	['name'=>'Marketing-PR','code'=>'marketing-pr'],
        	['name'=>'Xây dựng','code'=>'xay-dung'],
        	['name'=>'IT phần mềm','code'=>'it-phan-mem'],
        	['name'=>'Điện-Điện tử-Điện lạnh','code'=>'dien-dien-tu-dien-lanh'],
        	['name'=>'Cơ khí-Chế tạo','code'=>'co-khi-che-tao'],
        	['name'=>'Y tế-Dược','code'=>'y-te-duoc'],
        	['name'=>'Nhân sự','code'=>'nhan-su'],
        	['name'=>'Kiến trúc-TK nội thất','code'=>'kien-tru-thiet-ke-noi-that'],
        	['name'=>'Giáo dục-Đào tạo','code'=>'giao-duc-dao-tao'],
        	['name'=>'Bảo hiểm','code'=>'bao-hiem'],
        	['name'=>'Kỹ thuật','code'=>'ky-thuat'],
        	['name'=>'Biên-Phiên dịch','code'=>'bien-phin-dich'],
        	['name'=>'Ngoại thương-Xuất nhập khẩu','code'=>'ngoai-thuong-xuat-nhap-khau'],
        	['name'=>'Ngân hàng','code'=>'ngan-hang'],
        	['name'=>'Khách sạn-Nhà hàng','code'=>'khach-san-nha-hang'],
        	['name'=>'Dịch vụ','code'=>'dich-vu'],
        	['name'=>'Kho vận-Vật tư','code'=>'kho-van-vat-tu'],
        	['name'=>'Thư ký-Trợ lý','code'=>'thu-ki-tro-li'],
        	['name'=>'Dệt may - Da giày','code'=>'det-may-da-giay'],
        	['name'=>'Thiết kế-Mỹ thuật','code'=>'thiet-ke-my-thuat'],
        	['name'=>'IT phần cứng/mạng','code'=>'it-phan-cung-mang'],
        	['name'=>'Thiết kế đồ hoạ web','code'=>'thiet-ke-do-hoa-web'],
        	['name'=>'Điện tử viễn thông','code'=>'dien-tu-vien-thong'],
        	['name'=>'Công nghệ thông tin','code'=>'cong-nghe-thong-tin'],
        	['name'=>'Ngành nghề khác','code'=>'nganh-nghe-khac'],

        ]);
    }
}
