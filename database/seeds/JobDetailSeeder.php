<?php

use Illuminate\Database\Seeder;

class JobDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('job_details')->insert([
    		[
    			'salary'=>'15 – 20 triệu',
    			'experience'=>'1 năm',
    			'education'=>'Trung cấp',
    			'quantity'=>6,
    			'position'=>'Chuyên viên - Nhân viên ',
    			'gender'=>'Không yêu cầu',
    			'age'=>'Trên 20',
    			'expiration_date'=>'21/01/2019',
    			'job_description'=>'-	Giới thiệu, tư vấn, giải thích về quyền lợi cho khách hàng. Hướng dẫn, mời khách hàng tham gia các chương trình, sự kiện mà công ty đang phối hợp với các ban ngành trung ương tổ chức. <br>  -	Đàm phán, thương lượng, xúc tiến và thực hiện các thủ tục ký kết các hợp đồng truyền thông, quảng cáo thương hiệu với các khách hàng.<br>  -	Chi tiết sẽ được trao đổi qua quá trình phỏng vấn. Đồng thời, trong quá trình thử việc, nhân viên sẽ được đào tạo quy trình làm việc một cách chuyên nghiệp để đạt hiệu quả cao nhất trong công việc.',
    			'benefit'=>'-	Lương cơ bản: 5-7 triệu / tháng, hoa hồng: 15-30%, thu nhập không giới hạn, thưởng theo chương trình.<br>  -	Chế độ đãi ngộ đầy đủ theo quy định của Luật lao động.<br>  -	Làm việc theo giờ hành chính, nghỉ chiều thứ bảy và ngày chủ nhật.<br>  -	Làm việc trong môi trường năng động, phát huy hết khả năng của bản thân, nâng cao thu nhập.<br>  -	Được làm việc, giao lưu cùng với các Lãnh đạo nhà nước cấp cao, các Tập đoàn lớn, Doanh nghiệp trong và ngoài nước.',
    			'other_requirement'=>'-	Tốt nghiệp từ Trung cấp trở lên, ưu tiên ứng viên tốt nghiệp chuyên ngành Marketing, Quản trị kinh doanh, Ngoại thương, Kinh tế, Báo chí, Quan hệ công chúng…<br>  -	Chưa có kinh nghiệm được đào tạo, ưu tiên ứng viên đã có kinh nghiệm trong lĩnh vực truyền thông, tổ chức sự kiện, quảng cáo, báo chí.<br>  -	Có khả năng giao tiếp, tư vấn, trình bày, thuyết phục, đàm phán tốt.<br>  -	Có khả năng làm việc độc lập cũng như làm việc nhóm tốt. <br>  -	Năng động, nhiệt tình, có trách nhiệm trong công việc.'
            ],
            [
                'salary'=>'10 – 15 triệu',
                'experience'=>'1 năm',
                'education'=>'Cao đẳng',
                'quantity'=>6,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'15 - 24 tuổi',
                'expiration_date'=>'07/09/2019',
                'job_description'=>'-   Tư vấn, thuyết trình các sản phẩm dịch vụ quà tặng doanh nghiệp, quà tặng VIP và vật phẩm quảng cáo của Công ty cho khách hàng. <br>  - Tìm kiểm khách hàng tiềm năng và chăm sóc khách hàng hiện tại.<br>  -    Tìm kiểm khách hàng tiềm năng và chăm sóc khách hàng hiện tại. <br> -Báo cáo và chịu sự quản lý của Trưởng phòng Kinh doanh. <br> -Theo dõi công nợ khách hàng.',
                'benefit'=>'-   CB (5-7 triệu) + lương kinh doanh (thu nhập bình quân khoảng 10-12tr) / tháng (được tính luôn % doanh thu trong thời gian thử việc).<br>  -  Cơ hội thăng tiến, Du lịch hàng năm.<br>  -  Được thưởng tết, thưởng trong các dịp lễ, thưởng theo năng lực và kết quả công việc.<br>  -  Có cơ hội đuợc làm việc, tiếp xúc với những đối tác thuộc các Công ty, Tập đoàn lớn.<br>  -  ĐĐược tham gia các khóa đào tạo nội bộ, đào tạo bên ngoài để nâng cao kiến thức chuyên môn.',
                'other_requirement'=>'- Nam / Nữ, tốt nghiệp Cao Đẳng, Đại học trở lên, chuyên nghành Kinh Tế, Quản trị Kinh Doanh, Ngoại thương,  Ngoại ngữ hoặc Marketing.<br>  -   Ngoại hình khá.<br>  -   Có kinh nghiệm trong lĩnh vực Quà tặng, Quảng cáo Doanh nghiệp, Truyền thông, In ấn - thiết kế là lợi thế; sẽ thường xuyên được đào tạo.<br>  -  Sử dụng các phần mềm tin học văn phòng tốt. <br>  -  Có khả năng đàm phán và tự tin trong giao tiếp.<br> -  ăng động, nhiệt tình.<br> - Có phương tiện đi lại.'
            ],

            [
                'salary'=>'7 – 10 triệu',
                'experience'=>'1 năm',
                'education'=>'Không yêu cầu bằng cấp',
                'quantity'=>2,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'Không yêu cầu độ tuổi',
                'expiration_date'=>'15/09/2018',
                'job_description'=>'-   Trực tiếp bán xe máy tại showroom Số 7 Âu Cơ, Hà Nội hoặc số 252 Phố Huế <br>  - Trực tiếp tư vấn khách hàng, thực hiện chỉ tiêu kinh doanh.<br>  - Lập và triển khai kế hoạch bán hàng theo tuần / tháng / quý.<br> - Phát triển và chăm sóc các khách hàng. <br> - Triển khai các chương trình khuyến mại của Công ty tới các khách hàng mua xe.<br> - Thu thập và báo cáo cấp trên các thông tin phản hồi từ khách hàng, xử lý sau khi được phê duyệt.<br> - Thu thập thông tin về thị trường, về nhu cầu khách hàng và báo cáo cấp trên.<br> - Thực hiện các việc khác khi có yêu cầu của cấp trên.<br> - Chi tiết công việc sẽ trao đổi cụ thể khi phỏng vấn.',
                'benefit'=>'- Mức lương CB từ 7 -10Tr.<br>  - Ứng viên trúng tuyển sẽ được hưởng đầy đủ các quyền lợi theo quy định của Cty:<br>  - Được hưởng đầy đủ các chế độ BHXH, BHYT, các chế độ phúc lợi khác của Cty;<br>  - Được làm việc trong môi trường chuyên nghiệp, năng động;<br>  - Được tham gia các chương trình tham quan, nghỉ mát định kỳ hàng năm của Công ty.<br> Cơ hội được đào tạo nâng cao nghiệp vụ bởi các chuyên gia từ công ty Honda.',
                'other_requirement'=>'- Nhiệt tình, chịu khó, ham học hỏi, chịu được áp lực công việc.<br>  - Khả năng giao tiếp, đàm phán, thuyết phục khách hàng, thuyết trình tốt.<br>  - Ngoại hình ưa nhìn.<br>  - Không nói ngọng, không nói giọng địa phương. <br>  - Ưu tiên ứng viên có kinh nghiệm làm việc trong lĩnh vực kinh doanh / bán hàng.'
            ],

            [
                'salary'=>'10 – 15 triệu',
                'experience'=>'1 năm',
                'education'=>'Cao đẳng',
                'quantity'=>10,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'15 - 24 tuổi',
                'expiration_date'=>'26/08/2018',
                'job_description'=>'- Lên kế hoạch Marketing, kinh doanh và bán các sản phẩm, dịch vụ viễn thông, bưu chính. <br>  - Quản lý khách hàng trên địa bàn được phân công về doanh thu, công nợ, CSKH.<br>  - Tư vấn và hỗ trợ giải quyết những vướng mắc của khách hàng.<br> - Thực hiện các công việc khác theo sự phân công của lãnh đạo.',
                'benefit'=>'- Môi trường làm việc chuyên nghiệp, sáng tạo, cạnh tranh, phát triển, năng động.<br>  - Chính sách lương, thưởng, đãi ngộ hấp dẫn, kích thích hiệu quả công việc- Lương thưởng hấp dẫn: Lương cứng + % doanh số + thưởng (5tr - 30tr).<br>  - Được làm việc trong môi trường doanh nghiệp hàng đầu Việt Nam.<br>  - Cơ hội thăng tiến cao.<br>  - Nghỉ chủ nhật và các ngày lễ theo quy định.<br> -Lương cứng 5 triệu.',
                'other_requirement'=>'- Nam, Nữ từ 22 – 28 tuổi.<br>  - Tốt nghiệp Cao đẳng, Đại học chuyên ngành: Kinh tế, Tài chính, Quản trị kinh doanh hoặc các trường khối kỹ thuật nhưng yêu thích kinh doanh và có định hướng nghề nghiệp rõ ràng.<br>  - Có khả năng giao tiếp và đàm phán.<br>  - Có tinh thần trách nhiệm cao, nhiệt tình, năng động, chịu được áp lực cao trong công việc. <br>  - Có kỹ năng làm việc độc lập hoặc theo nhóm.'
            ],

            [
                'salary'=>'7 – 10 triệu',
                'experience'=>'1 năm',
                'education'=>'Không yêu cầu bằng cấp',
                'quantity'=>10,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'Không yêu cầu độ tuổi',
                'expiration_date'=>'31/08/2018',
                'job_description'=>'- Phát triển thị trường, kinh doanh các sản phẩm linh kiện, phụ kiện điện thoại di động, quản lý khách hàng theo khu vực được giao. <br>  - Sẽ được đào tạo nếu chưa có kinh nghiệm.<br>  - Có phương tiện đi lại thị trường, có tinh thần cầu tiến trong công việc, năng động, ham học hỏi, trung thực và nghiêm túc trong công việc.<br> + Thời gian làm việc:<br> - Sáng từ 8h30 - 12h, chiều từ 13h - 17h30 (từ thứ 2 - thứ 7).<br> - Nghỉ Chủ Nhật và các ngày lễ theo quy định.',
                'benefit'=>'- Thu nhập: Lương cứng 4 triệu + hoa hồng theo hiệu quả kinh doanh (trung bình từ 7.000.000 - 10.000.000 đồng / tháng).<br>  - Tăng lương theo hiệu quả công việc.<br>  - Môi trường làm việc năng động, thân thiện, cơ hội thăng tiến. Được đào tạo thêm để nâng cao nghiệp vụ chuyên môn.<br>  - Được tham gia các hoạt động ngoại khóa của Công ty.',
                'other_requirement'=>'- Không yêu cầu bằng cấp, có niềm đam mê và yêu thích công việc kinh doanh.<br>  - Ham học hỏi, trung thực, có trách nhiệm với công việc.<br>  + Hồ sơ:<br>  - Thư dự tuyển, CV.<br>  - Sơ yếu lí lịch có dán ảnh 4x6 (không quá 06 tháng).<br>- Bản sao giấy khai sinh, các văn bằng, chứng chỉ.<br> - Chứng minh thư, hộ khẩu photo công chứng.<br> <br> Có thể nộp trực tiếp hồ sơ tại địa chỉ Công ty: Tầng 5, số 64, ngõ 360 Xã Đàn, P. Trung Phụng, Q. Đống Đa, TP. Hà Nội.'
            ],

            [
                'salary'=>'7 – 10 triệu',
                'experience'=>'1 năm',
                'education'=>'Cao đẳng',
                'quantity'=>5,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'Không yêu cầu độ tuổi',
                'expiration_date'=>'31/08/2018',
                'job_description'=>'- Phân tích thị trường, nắm bắt được đối thủ cạnh tranh. <br>  - Lên kế hoạch kinh doanh theo quý, theo tháng, theo tuần.<br>  - Triển khai kế hoạch kinh doanh-tìm kiếm khách hàng-ký hợp đồng.<br> - Xây dựng quan hệ tốt với Quản lý / Chủ điểm bán đảm bảo là cầu nối giữa Công ty và Khách hàng.<br> - Thường xuyên cập nhật và chia sẻ thông tin phản hồi của khách hàng về sản phẩm và dịch vụ của công ty.<br> - Tiếp nhận thông tin yêu cầu của khách hàng, liên hệ giải đáp tư vấn, chất lượng, giá cả sản phẩm…cho khách hàng.<br> - Đảm bảo báo cáo làm đúng hạn và đầy đủ.<br> - Thực hiện các nhiệm vụ được giao khác theo yêu cầu của Công ty.',
                'benefit'=>'-Thu nhập: Lương cơ bản + phụ cấp (6.000.000) + lương doanh số (không giới hạn).<br>  - Lương thưởng hấp dẫn.<br>  - Hưởng các chế độ theo quy định.<br>  - Môi trường làm việc trẻ trung, hiện đại, năng động và chuyên nghiệp.<br>  - Tham gia các khóa đào tạo nghiệp vụ tại công ty.<br> - Tham gia BHXH, BHYT.',
                'other_requirement'=>'- Nhiệt tình, năng động, độc lập, nhạy bén.<br>  - Có kỹ năng thuyết trình, đàm phán.<br>  - Có khả năng làm việc độc lập hoặc theo nhóm.<br>  - Ưu tiên ứng viên có kinh nghiệm trong lĩnh vực kinh doanh mặt hàng mẹ và bé.'
            ],

            [
                'salary'=>'7 – 10 triệu',
                'experience'=>'1 năm',
                'education'=>'Trung cấp',
                'quantity'=>5,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Nam',
                'age'=>'Không yêu cầu độ tuổi',
                'expiration_date'=>'31/08/2018',
                'job_description'=>'- Tìm kiếm khách hàng và cơ sở dữ liệu khách hàng.<br>  - Giới thiệu, quảng bá sản phẩm,  tư vấn cho khách hàng về các sản phẩm của công ty.<br>  - Chi tiết công việc sẽ trao đổi thêm trong quá trình phỏng vấn.',
                'benefit'=>'- Lương cứng: 5 triệu / tháng không phụ thuộc doanh số + hoa hồng.<br>  - Thu nhập cao (bao gồm lương + thưởng doanh số).<br>  - Chưa có kinh nghiệm sẽ được    đào tạo các kỹ năng kinh doanh bài bản, phát triển tài năng bản thân.<br>  - Được hưởng các chế độ theo đúng quy định của pháp luật: BHYT, BHXH, thưởng dịp Lễ, tết...<br>  - Làm việc trong    môi trường năng động, chuyên nghiệp.<br> - Có nhiều cơ hội thăng tiến trong nghề nghiệp.',
                'other_requirement'=>'- Yêu thích công việc kinh doanh, đam mê kiếm tiền, mong muốn thu nhập cao và ổn định.<br>  - Sức khỏe tốt, ngoại hình ưa nhìn là một lợi thế.<br> - Có các kỹ năng giao tiếp tốt, khả năng đàm phán, thuyết phục khách hàng, kỹ năng vi tính văn phòng.<br>  - Có tinh thần làm việc chuyên nghiệp, chủ động, gắn bó lâu dài với công ty.'
            ],

            [
                'salary'=>'7 – 10 triệu',
                'experience'=>'1 năm',
                'education'=>'Cao đẳng',
                'quantity'=>4,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'Không yêu cầu độ tuổi',
                'expiration_date'=>'30/09/2018',
                'job_description'=>'- Thiết lập quan hệ khách hàng dựa trên danh sách công ty cung cấp.<br>   - Thực hiện nghiệp vụ bán hàng.<br>- Chăm sóc khách hàng hiện tại và theo dõi đơn hàng.<br> - Tổng hợp nhu cầu thị trường và lập báo cáo.<br> - Đưa ra phương án, kế hoạch kinh doanh theo tuần, tháng, quý.<br> - Thực hiện các chỉ tiêu phát triển thị trường.<br> * Địa chỉ VP miền Nam: Phòng R402, Tầng 4, Tòa nhà 5-7 Hoàng Việt, Phường 04, Quận Tân Bình, Thành phố Hồ Chí Minh.<br> * Địa chỉ VP Hà Nội: Tầng 3, tòa FLC, đường Lê Đức Thọ, Nam Từ Liêm, Hà Nội.<br> * Hưng Yên: Thôn Tứ Mỹ - Xã Phùng Chí Kiên - HUyện Mỹ Hào - Hưng Yên.',
                'benefit'=>'- Thời gian làm việc: 8 giờ / ngày, (nghỉ chiều thứ 7, Chủ Nhật và các ngày Lễ theo Luật Lao động). <br>  - Lương cứng: 7 -12 tr / tháng , phụ cấp ăn trưa 30k / bữa, phụ cấp điện thoại: 600k / th.<br> - Thu nhập cao, có cơ hội thăng tiến trong 1 công ty lớn .<br>  - Thưởng doanh thu cao, đãi ngộ hấp dẫn xứng đáng với năng lực.<br>  - Được làm việc trong môi trường trẻ trung, năng động, chuyên nghiệp.<br> - Chính sách BHXH, BHYT và các phúc lợi khác theo đúng quy định của Luật lao động.<br> - Đóng BHXH sau 2 tháng thử việc.<br> - Ký hợp đồng dài hạn.',
                'other_requirement'=>'- Kinh nghiệm làm việc: tối thiểu 1 năm kinh doanh.<br>  - Kinh nghiệm làm việc: tối thiểu 1 năm kinh doanh\r\n  - Tốt nghiệp từ Cao đẳng trở lên trong các ngành QTKD, tài chính, marketing...<br>  - Năng động, nhiệt tình, có khả năng tư duy tốt.<br>  - Ngoại hình khá, tác phong lịch sự, nhanh nhẹn. <br>  - Ưu tiên các ứng viên có kinh nghiệm làm việc ở lĩnh vực B2B.'
            ],

            [
                'salary'=>'10 – 15 triệu',
                'experience'=>'1 năm',
                'education'=>'Cao đẳng',
                'quantity'=>2,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'Không yêu cầu độ tuổi ',
                'expiration_date'=>'28/09/2018',
                'job_description'=>'-   Hỗ trợ kinh doanh, làm việc trực tiếp với người Nhật và Giám đốc. <br>  - Làm các công việc liên quan đến Xuất – Nhập Khẩu.<br>  -    Các công việc khác theo yêu cầu của công ty.<br> Thời gian làm việc: 8:00 -17:00, nghỉ 2 thứ 7 và 4 chủ nhật/ 1 tháng.',
                'benefit'=>'- Lương: từ 8.000.000 - 15.000.000 / tháng (tùy năng lực).<br>  - Chế độ BHXH – BHYT – BHTN theo quy định của Nhà nước, hưởng chế độ và chính sách đãi ngộ của  Công ty (như chế độ lễ tết, thăm hỏi hiếu hỉ....).<br>  - Môi trường làm việc chuyên nghiệp, năng động, hiện đại có định hướng phát triển bền vững.<br>  - Có cơ hội đi công tác các nước châu Á như: Nhật, Hong Kong, Singapore, Philippines.',
                'other_requirement'=>'- Nam – Nữ, tuổi từ 26, tốt nghiệp Đại học chuyên ngành kinh tế, quản trị kinh doanh.<br>  - Có ít nhất 1-2 năm kinh nghiệm làm trợ lý kinh doanh, nhân viên kinh doanh.<br>  - Có kỹ năng lập kế hoạch thực hiện mục tiêu\r\n  - Có kỹ năng phân tích, tổng hợp.<br>  - Sử dụng thành thạo Micorosoft office .<br> - Tiếng Nhật N3 trở lên (Biết tiếng Anh là một lợi thế).'
            ],

            [
                'salary'=>'15 – 20 triệu',
                'experience'=>'0 năm',
                'education'=>'Không yêu cầu bằng cấp',
                'quantity'=>10,
                'position'=>'Chuyên viên - Nhân viên ',
                'gender'=>'Không yêu cầu',
                'age'=>'25 - 29 tuổi',
                'expiration_date'=>'10/09/2018',
                'job_description'=>'- Tìm kiếm khách hàng tiềm năng . <br>  - Tư vấn các giải pháp tài chính phù hợp cho khách hàng.<br>  - Giải đáp thắc mắc của khách hàng .<br> - Ký kết hợp đồng.<br> - Chăm sóc, hỗ trợ khách hàng trước, trong và sau khi kí hợp đồng.<br> - Xây dựng đội nhóm để lên vị trí các cấp quản lý.',
                'benefit'=>'-  Thu nhâp: 15 triệu - 20 triệu .<br>  – Được hưởng lên tới 40% đến 56% theo tháng, quý cho hợp đồng khai thác mới.<br>  – Được làm việc trong môi trường chuyên nghiệp, năng động, cơ sở vật chất hiện đại bậc nhất Việt Nam (Chubb Life Việt Nam vào top 5 nơi làm việc tốt nhất ngành bảo hiểm).<br>   – Được tham gia miễn phí toàn bộ các khóa đào tạo kiến thức, kỹ năng tại công ty: Kỹ năng giao tiếp, bán hàng, lập kế hoạch, lãnh đạo, thuyết trình…<br>  – Được định hướng phát triển ngay từ khi mới bắt đầu dựa vào tính cách & đặc điểm từng cá nhân.',
                'other_requirement'=>'– Nam / Nữ tuổi từ 22-55.<br>  – Sử dụng thành thạo Smartphone & máy tính PC / Laptop.<br>   – Có tinh thần cầu tiến, ham học hỏi, trung thực.<br>  – Đã từng làm việc ở vị trí bán hàng / kinh doanh, Telesales, chăm sóc khách hàng là 1 lợi thế. <br>  – Từng học khoa bảo hiểm trong các trường đại học là 1 lợi thế.'
            ],
        ]);
    }
}

