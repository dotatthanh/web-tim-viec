<?php

use Illuminate\Database\Seeder;

class JobSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('job_summaries')->insert([
        	['title'=>'Nhân Viên Kinh Doanh Mảng Truyền Thông, Tổ Chức Sự Kiện (Thu Nhập Từ 10 Triệu Đến 20 Triệu / Tháng',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>1,
        	 'company_id'=>1,
        	 'job_detail_id'=>1
        	],
        	['title'=>'Nhân Viên Kinh Doanh (Thu Nhập 10 - 12 Triệu / Tháng) Không Áp Doanh Số',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>1,
        	 'company_id'=>2,
        	 'job_detail_id'=>2
        	],
        	['title'=>'Nhân Viên Bán Hàng Honda Tại Hà Nội',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>1,
        	 'company_id'=>3,
        	 'job_detail_id'=>3
        	],
        	['title'=>'Nhân Viên Kinh Doanh - Mức Lương 10 – 15 Triệu',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>1,
        	 'company_id'=>4,
        	 'job_detail_id'=>4
        	],
        	['title'=>'Nhân Viên IT',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>8,
        	 'company_id'=>3,
        	 'job_detail_id'=>5
        	],
        	['title'=>'Lập Trình Viên - Frontend Developer (Angular / React / Vuejs) - Thu Nhập 15-20 Triệu / Tháng',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>8,
        	 'company_id'=>3,
        	 'job_detail_id'=>6
        	],
        	['title'=>'Nhân Viên Kinh Doanh Lương Cơ Bản Từ 7 Triệu Trở Lên',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>1,
        	 'company_id'=>7,
        	 'job_detail_id'=>7
        	],
        	['title'=>'Chuyên Viên Tư Vấn Tài Chính',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>5,
        	 'company_id'=>8,
        	 'job_detail_id'=>8
        	],
        	['title'=>'Chuyên Viên Phát Triển Kinh Doanh Gcafe',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>6,
        	 'company_id'=>9,
        	 'job_detail_id'=>9
        	],
        	['title'=>'Nhân Viên Kinh Doanh (Có Lương Cứng)',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'category_id'=>1,
        	 'company_id'=>10,
        	 'job_detail_id'=>10
        	],
        ]);
    }
}
