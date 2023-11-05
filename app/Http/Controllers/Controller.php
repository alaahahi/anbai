<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Service;
use App\Models\Team;
use App\Models\Project;
use App\Models\ProjectImages;
use App\Models\Contact;
use App\Models\Social;
use App\Models\PrivacyPolicy;
use App\Models\Terms;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\About;
use App\Models\Faq;
use App\Models\Client;
use App\Models\Setting;
use App\Models\Customize;
use App\Models\Slider;
use App\Models\Category;
use App\Models\ProjectType;
use App\Models\TeamMemberType;
use App\Models\Career;



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {

        // $Setting = Setting::get();

        // if (!$Setting) {
            $data =new Setting();

            $data->site_title = 
                [
                    'ar' => 'مجموعة الأهلية غروب' ,
                    'en' => 'Al-Ahlia Group' ,
                ];
            $data->description = [
                'ar' => "مجموعة الأهلية ، والتي ظهرت منها أكبر مجموعة مملوكة للقطاع الخاص وأكثرها تنوعًا في الدولة والتي تقدم مجموعة واسعة من المنتجات والخدمات للشركات والمستهلكين على حد سواء ، مما يوسع نطاقها ينتشر في جميع أنحاء البلاد. " ,
                'en' => "Ahlia Group, from which emerged the largest and most diversified privately owned group in the country that offers a wide range of products and services to businesses and consumers alike, expanding its reach across the country." ,
            ];
            $data->full_name_admin = 'Al-Ahlia Group';
            $data->email = 'info@example.com';
            $data->phone = '123456789';
            $data->logo = '/storage/images/about/logo.png';
            $data->logo_white = '/storage/images/about/logo_white.png';
            $data->logo_sm = '/storage/images/about/logo-sm.png';
            $data->logo_sm_white = '/storage/images/about/logo_sm_white.png';
            $data->icon = '/storage/images/about/icon.png';
            $data->copy_right = 'Al-Ahlia Group';
            $data->seo_title = 'Al-Ahlia Group';
            $data->seo_description = 'Al-Ahlia Group';
            $data->seo_slug = 'Al-Ahlia Group';
            $data->seo_Keyword = 'Al-Ahlia Group';
            $data->graph_title = 'Al-Ahlia Group';
            $data->graph_type = 'Al-Ahlia Group';
            $data->graph_image_alt = 'Al-Ahlia Group';
            $data->grap_url = 'Al-Ahlia Group';
            $data->save();


            $default_Customize = [
                [
                    "base_module_name" => 'home',
                    "link" => '/',
                    "component" => 'home',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'الرئيسية' ,
                        'en' => 'Home' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'abouts',
                    "link" => '/about',
                    "component" => 'about',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'من نحن' ,
                        'en' => 'About us' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'blog',
                    "link" => '/blog',
                    "component" => 'blog',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'المدونة' ,
                        'en' => 'Blog' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'services',
                    "link" => '/services',
                    "component" => 'services',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'خدماتنا' ,
                        'en' => 'services' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'projects',
                    "link" => '/projects',
                    "component" => 'projects',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'المشاريع' ,
                        'en' => 'Projects' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'faq',
                    "link" => '/faq',
                    "component" => 'faq',
                    "active_navbar" => 0,
                    "title" => [
                        'ar' => 'الأسئلة الشائعة' ,
                        'en' => 'F&Q' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'files',
                    "link" => '/files',
                    "component" => 'files',
                    "active_navbar" => 0,
                    "title" => [
                        'ar' => 'ملفات وميديا' ,
                        'en' => 'Files' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'packages',
                    "link" => '/packages',
                    "component" => 'packages',
                    "active_navbar" => 0,
                    "title" => [
                        'ar' => 'الباقات' ,
                        'en' => 'Packages' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'careerss',
                    "link" => '/careerss',
                    "component" => 'careerss',
                    "active_navbar" => 0,
                    "title" => [
                        'ar' => 'الوظائف' ,
                        'en' => 'Careerss' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'clients',
                    "link" => '/clients',
                    "component" => 'clients',
                    "active_navbar" => 0,
                    "title" => [
                        'ar' => 'العملاء' ,
                        'en' => 'Clients' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'teams',
                    "link" => '/team',
                    "component" => 'team',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'فريق العمل' ,
                        'en' => 'Team' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'testimonials',
                    "link" => '/testimonials',
                    "component" => 'testimonials',
                    "active_navbar" => 0,
                    "title" => [
                        'ar' => 'الشهادات والتوصية' ,
                        'en' => 'Testimonials' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
                [
                    "base_module_name" => 'contact',
                    "link" => '/contact-us',
                    "component" => 'contact-us',
                    "active_navbar" => 1,
                    "title" => [
                        'ar' => 'الاتصال بنا' ,
                        'en' => 'Contact us' ,
                    ],
                    "description" => [
                        'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                        'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                    ],
                ],
    
            ];
    
            $i = 1;
            foreach ($default_Customize as $item) {
                $data = new Customize();
                $data->base_module_name = $item['base_module_name'];
                $data->link = $item['link'];
                $data->component = $item['component'];
                $data->setTranslations('title', $item['title']);
                $data->setTranslations('description', $item['description']);
                $data->image = '/storage/images/customize/' . rand(1,11) . '.jpg';
                $data->active_navbar = $item['active_navbar'];
                $data->active_home = 1;
                $data->active_dashboard = 1;
                $data->order = $i;
                $data->save();
            }


            $data =new PrivacyPolicy();
            $data->title = 
                [
                    'ar' => 'مرحبا بك في مجموعة الأهلية' ,
                    'en' => 'Welcome to Al Ahlia Group' ,
                ];
            $data->description = [
                'ar' => "
                تحدد سياسة الخصوصية هذه الأساس الذي سيتم على أساسه التعامل مع أي بيانات شخصية ، بما في ذلك على سبيل المثال لا الحصر ،
                 تفاصيل الدفع والمعلومات الأخرى التي نجمعها منك أو من مصادر أخرى أو التي تقدمها لنا 
                 (“المعلومات”) فيما يتعلق بك الوصول إلى واستخدام www.alahlia-group.ae والخدمات والتطبيقات 
                 (يشار إليها مجتمعة باسم “الخدمات”). نحن نتفهم الأهمية التي توليها للمعلومات ،
                  ونحن ملتزمون بحماية خصوصيتك واحترامها. يرجى قراءة ما يلي بعناية لفهم ممارساتنا المتعلقة بمعلوماتك.
                   باستخدام خدماتنا ، فإنك توافق على التعامل مع معلوماتك وفقًا لسياسة الخصوصية هذه.
                    قد نقوم بجمع ومعالجة المعلومات التالية عنك: -
                     المعلومات التي تقدمها من خلال ملء النماذج على منصتنا ،
                      بما في ذلك المعلومات المقدمة في وقت التسجيل لاستخدام منصتنا والتسجيلات المشتركة الأخرى 
                      (مثل عمليات تسجيل الدخول إلى وسائل التواصل الاجتماعي) ، أو الاشتراك في خدماتنا ، أو نشر المواد 
                      ، أو طلب المزيد من الخدمات. - المعلومات التي تقدمها عند الدخول في مسابقة أو عرض ترويجي عبر منصتنا 
                      ، أو تقديم مراجعات أو شهادات أو تعليقات على منصتنا. - المعلومات التي تزودنا بها ، أو التي قد نجمعها منك 
                      ، عندما تبلغ عن مشكلة في منصتنا. - سجل بالمراسلات إذا اتصلت بنا. - معلومات عامة ومجمعة
                       وديموغرافية وغير شخصية. - إذا قمت بتنزيل تطبيق الهاتف المحمول الخاص بنا أو استخدامه ، فقد نتمكن من الوصول 
                       إلى تفاصيل حول موقعك وجهازك المحمول ، بما في ذلك معرف فريد لجهازك. - تفاصيل المعاملات التي تجريها من خلال منصتنا
                        وتفاصيل تنفيذ طلباتك. - تفاصيل حول
                         جهاز الكمبيوتر الخاص بك ، بما في ذلك على سبيل المثال لا الحصر عنوان IP الخاص بك ونظام التشغيل ونوع المتصفح ، بالإضافة إلى معلومات
                          حول استخدامك العام للإنترنت (على سبيل المثال ، باستخدام التكنولوجيا التي تخزن المعلومات على جهازك أو تكتسب الوصول إليه
                           ، مثل ملفات تعريف الارتباط ، بكسلات التتبع وإشارات الويب وما إلى ذلك (معًا ، “ملفات تعريف الارتباط”)).
                " ,
                'en' => "
                This Privacy Policy sets out the basis on which any personal data, including without limitation,
                 payment details and other information we collect from you or other sources or that you provide to us 
                 (“Information”) in connection with your access and use will be treated. www.alahlia-group.ae, 
                 services and applications (collectively, the “Services”). We understand the importance you place on 
                 information, and we are committed to protecting and respecting your privacy. Please read the following 
                 carefully to understand our information practices. By using our Services, you consent to the handling 
                 of your information in accordance with this Privacy Policy. We may collect and process the following 
                 information about you: - information you provide by filling out forms on our Platform, including 
                 information provided at the time of registering to use our Platform and other joint registrations
                  (such as social media logins), subscribing to our Services, or posting materials, or request more services.
                   Information you provide when entering a contest or promotion through our Platform, or submitting reviews,
                    testimonials or comments on our Platform. Information that you provide to us, or that we may collect from you,
                     when you report a problem with our Platform. - Record correspondence if you contact us.
                      - General, aggregated, demographic and non-personally identifiable information.
                       - If you download or use our mobile application, we may have access to details about your location and your 
                       mobile device, including a unique identifier for your device. - Details of the transactions
                        you carry out through our platform and details of the execution of your orders. - Details about your computer,
                         including but not limited to your IP address, operating system and browser type,
                          as well as information about your general Internet use 
                          (for example, using technology that stores information on or gains access to your device, such as cookies,
                           tracking pixels, web beacons, etc. (together, “cookies”).
                " ,
            ];
            $data->save();
    
            $data =new Terms();
            $data->title = 
                [
                    'ar' => 'مرحبا بك في مجموعة الأهلية' ,
                    'en' => 'Welcome to Al Ahlia Group' ,
                ];
            $data->description = [
                'ar' => "
                تحدد سياسة الخصوصية هذه الأساس الذي سيتم على أساسه التعامل مع أي بيانات شخصية ، بما في ذلك على سبيل المثال لا الحصر ،
                    تفاصيل الدفع والمعلومات الأخرى التي نجمعها منك أو من مصادر أخرى أو التي تقدمها لنا 
                    (“المعلومات”) فيما يتعلق بك الوصول إلى واستخدام www.alahlia-group.ae والخدمات والتطبيقات 
                    (يشار إليها مجتمعة باسم “الخدمات”). نحن نتفهم الأهمية التي توليها للمعلومات ،
                    ونحن ملتزمون بحماية خصوصيتك واحترامها. يرجى قراءة ما يلي بعناية لفهم ممارساتنا المتعلقة بمعلوماتك.
                    باستخدام خدماتنا ، فإنك توافق على التعامل مع معلوماتك وفقًا لسياسة الخصوصية هذه.
                    قد نقوم بجمع ومعالجة المعلومات التالية عنك: -
                        المعلومات التي تقدمها من خلال ملء النماذج على منصتنا ،
                        بما في ذلك المعلومات المقدمة في وقت التسجيل لاستخدام منصتنا والتسجيلات المشتركة الأخرى 
                        (مثل عمليات تسجيل الدخول إلى وسائل التواصل الاجتماعي) ، أو الاشتراك في خدماتنا ، أو نشر المواد 
                        ، أو طلب المزيد من الخدمات. - المعلومات التي تقدمها عند الدخول في مسابقة أو عرض ترويجي عبر منصتنا 
                        ، أو تقديم مراجعات أو شهادات أو تعليقات على منصتنا. - المعلومات التي تزودنا بها ، أو التي قد نجمعها منك 
                        ، عندما تبلغ عن مشكلة في منصتنا. - سجل بالمراسلات إذا اتصلت بنا. - معلومات عامة ومجمعة
                        وديموغرافية وغير شخصية. - إذا قمت بتنزيل تطبيق الهاتف المحمول الخاص بنا أو استخدامه ، فقد نتمكن من الوصول 
                        إلى تفاصيل حول موقعك وجهازك المحمول ، بما في ذلك معرف فريد لجهازك. - تفاصيل المعاملات التي تجريها من خلال منصتنا
                        وتفاصيل تنفيذ طلباتك. - تفاصيل حول
                            جهاز الكمبيوتر الخاص بك ، بما في ذلك على سبيل المثال لا الحصر عنوان IP الخاص بك ونظام التشغيل ونوع المتصفح ، بالإضافة إلى معلومات
                            حول استخدامك العام للإنترنت (على سبيل المثال ، باستخدام التكنولوجيا التي تخزن المعلومات على جهازك أو تكتسب الوصول إليه
                            ، مثل ملفات تعريف الارتباط ، بكسلات التتبع وإشارات الويب وما إلى ذلك (معًا ، “ملفات تعريف الارتباط”)).
                " ,
                'en' => "
                This Privacy Policy sets out the basis on which any personal data, including without limitation,
                    payment details and other information we collect from you or other sources or that you provide to us 
                    (“Information”) in connection with your access and use will be treated. www.alahlia-group.ae, 
                    services and applications (collectively, the “Services”). We understand the importance you place on 
                    information, and we are committed to protecting and respecting your privacy. Please read the following 
                    carefully to understand our information practices. By using our Services, you consent to the handling 
                    of your information in accordance with this Privacy Policy. We may collect and process the following 
                    information about you: - information you provide by filling out forms on our Platform, including 
                    information provided at the time of registering to use our Platform and other joint registrations
                    (such as social media logins), subscribing to our Services, or posting materials, or request more services.
                    Information you provide when entering a contest or promotion through our Platform, or submitting reviews,
                    testimonials or comments on our Platform. Information that you provide to us, or that we may collect from you,
                        when you report a problem with our Platform. - Record correspondence if you contact us.
                        - General, aggregated, demographic and non-personally identifiable information.
                        - If you download or use our mobile application, we may have access to details about your location and your 
                        mobile device, including a unique identifier for your device. - Details of the transactions
                        you carry out through our platform and details of the execution of your orders. - Details about your computer,
                            including but not limited to your IP address, operating system and browser type,
                            as well as information about your general Internet use 
                            (for example, using technology that stores information on or gains access to your device, such as cookies,
                            tracking pixels, web beacons, etc. (together, “cookies”).
                " ,
            ];
            $data->save();
    
        // }

        $abouts = [
            [
                "title" => [
                    'ar' => 'من نحن' ,
                    'en' => 'who are we' ,
                ],
                "description" => [
                    'ar' => "إذا كنت تبحث عن شركة موثوقة وذات خبرة يمكنها توفير أجهزة ومعدات مطبخ عالية الجودة، فلخيارك المثالي الأهلية لمعدات المطابخ. حلولنا المبتكرة ومواصفاتنا عالية الجودة وخدمة العملاء التي لا مثيل لها تجعلنا الخيار الرائد لكبار الطهاة وأصحاب الفنادق والمطاعم. اتصل بنا اليوم لمعرفة المزيد حول كيف يمكننا مساعدتك في نقل مطبخك إلى المستوى التالي" ,
                    'en' => "If you are looking for a reliable and experienced company that can provide high quality kitchen appliances and equipment, then Al Ahlia Kitchen Equipment is your ideal choice. Our innovative solutions, high-quality specifications, and unparalleled customer service make us the leading choice for chefs, hoteliers, and restaurateurs. Contact us today to find out more about how we can help you take your kitchen to the next level!" ,
                ],
                "image" => '2.png',
            ],
            [
                "title" => [
                    'ar' => 'مرحبا بك في مجموعة الأهلية' ,
                    'en' => 'Welcome to Al Ahlia Group' ,
                ],
                "description" => [
                    'ar' => "إذا كنت تبحث عن شركة موثوقة وذات خبرة يمكنها توفير أجهزة ومعدات مطبخ عالية الجودة، فلخيارك المثالي الأهلية لمعدات المطابخ. حلولنا المبتكرة ومواصفاتنا عالية الجودة وخدمة العملاء التي لا مثيل لها تجعلنا الخيار الرائد لكبار الطهاة وأصحاب الفنادق والمطاعم. اتصل بنا اليوم لمعرفة المزيد حول كيف يمكننا مساعدتك في نقل مطبخك إلى المستوى التالي" ,
                    'en' => "If you are looking for a reliable and experienced company that can provide high quality kitchen appliances and equipment, then Al Ahlia Kitchen Equipment is your ideal choice. Our innovative solutions, high-quality specifications, and unparalleled customer service make us the leading choice for chefs, hoteliers, and restaurateurs. Contact us today to find out more about how we can help you take your kitchen to the next level!" ,
                ],
                "image" => '3.png',
            ],
            [
                "title" => [
                    'ar' => 'رؤيتنا' ,
                    'en' => 'installation' ,
                ],
                "description" => [
                    'ar' => "أن نكون الشركة الرائدة عالميًا في صناعتنا ، حيث نقدم حلولًا مبتكرة تتجاوز توقعات العملاء وتقود النمو المستدام." ,
                    'en' => "To be the global leader in our industry, providing innovative solutions that exceed customer expectations and drive sustainable growth." ,
                ],
                "image" => '4.png',
            ],
            [
                "title" => [
                    'ar' => 'رسالتنا' ,
                    'en' => 'installation' ,
                ],
                "description" => [
                    'ar' => "مهمتنا هي التمكين والإلهام ، وخلق تأثير إيجابي من خلال الحلول المبتكرة التي تغير الحياة وتشكل مستقبلًا أفضل." ,
                    'en' => "Our mission is to empower, inspire, and create a positive impact through innovative solutions that change lives and shape a better future." ,
                ],
                "image" => '1.png',
            ]

        ];

        $i = 1;
        foreach ($abouts as $item) {
            $data = new About();
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('description', $item['description']);
            $data->image = '/storage/images/about/' . $item['image'];
            $data->order = $i;
            $data->save();

            $i++;
        }


        $faqs = [
            [
                "question" => [
                    'ar' => 'هل يوجد فروع خارج الإمارات العربية المتحدة؟' ,
                    'en' => 'Are there branches outside the United Arab Emirates?' ,
                ],
                "answer" => [
                    'ar' => "مجموعة الأهلية ، والتي ظهرت منها أكبر مجموعة مملوكة للقطاع الخاص وأكثرها تنوعًا في الدولة والتي تقدم مجموعة واسعة من المنتجات والخدمات للشركات والمستهلكين على حد سواء ، مما يوسع نطاقها ينتشر في جميع أنحاء البلاد." ,
                    'en' => "Ahlia Group, from which emerged the largest and most diversified privately owned group in the country that offers a wide range of products and services to businesses and consumers alike, expanding its reach across the country." ,
                ],
            ],
            [
                "question" => [
                    'ar' => 'هل يوجد فروع خارج الإمارات العربية المتحدة؟' ,
                    'en' => 'Are there branches outside the United Arab Emirates?' ,
                ],
                "answer" => [
                    'ar' => "مجموعة الأهلية ، والتي ظهرت منها أكبر مجموعة مملوكة للقطاع الخاص وأكثرها تنوعًا في الدولة والتي تقدم مجموعة واسعة من المنتجات والخدمات للشركات والمستهلكين على حد سواء ، مما يوسع نطاقها ينتشر في جميع أنحاء البلاد." ,
                    'en' => "Ahlia Group, from which emerged the largest and most diversified privately owned group in the country that offers a wide range of products and services to businesses and consumers alike, expanding its reach across the country." ,
                ],
            ],
            [
                "question" => [
                    'ar' => 'هل يوجد فروع خارج الإمارات العربية المتحدة؟' ,
                    'en' => 'Are there branches outside the United Arab Emirates?' ,
                ],
                "answer" => [
                    'ar' => "مجموعة الأهلية ، والتي ظهرت منها أكبر مجموعة مملوكة للقطاع الخاص وأكثرها تنوعًا في الدولة والتي تقدم مجموعة واسعة من المنتجات والخدمات للشركات والمستهلكين على حد سواء ، مما يوسع نطاقها ينتشر في جميع أنحاء البلاد." ,
                    'en' => "Ahlia Group, from which emerged the largest and most diversified privately owned group in the country that offers a wide range of products and services to businesses and consumers alike, expanding its reach across the country." ,
                ],
            ],
            [
                "question" => [
                    'ar' => 'هل يوجد فروع خارج الإمارات العربية المتحدة؟' ,
                    'en' => 'Are there branches outside the United Arab Emirates?' ,
                ],
                "answer" => [
                    'ar' => "مجموعة الأهلية ، والتي ظهرت منها أكبر مجموعة مملوكة للقطاع الخاص وأكثرها تنوعًا في الدولة والتي تقدم مجموعة واسعة من المنتجات والخدمات للشركات والمستهلكين على حد سواء ، مما يوسع نطاقها ينتشر في جميع أنحاء البلاد." ,
                    'en' => "Ahlia Group, from which emerged the largest and most diversified privately owned group in the country that offers a wide range of products and services to businesses and consumers alike, expanding its reach across the country." ,
                ],
            ],
            [
                "question" => [
                    'ar' => 'هل يوجد فروع خارج الإمارات العربية المتحدة؟' ,
                    'en' => 'Are there branches outside the United Arab Emirates?' ,
                ],
                "answer" => [
                    'ar' => "مجموعة الأهلية ، والتي ظهرت منها أكبر مجموعة مملوكة للقطاع الخاص وأكثرها تنوعًا في الدولة والتي تقدم مجموعة واسعة من المنتجات والخدمات للشركات والمستهلكين على حد سواء ، مما يوسع نطاقها ينتشر في جميع أنحاء البلاد." ,
                    'en' => "Ahlia Group, from which emerged the largest and most diversified privately owned group in the country that offers a wide range of products and services to businesses and consumers alike, expanding its reach across the country." ,
                ],
            ],

        ];

        $i = 1;
        foreach ($faqs as $item) {
            $data = new Faq();
            $data->setTranslations('question', $item['question']);
            $data->setTranslations('answer', $item['answer']);
            $data->order = $i;
            $data->save();

            $i++;
        }

        $clients = [
            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],
            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],            [
                "name" => [
                    'ar' => 'العميل' ,
                    'en' => 'client' ,
                ],
            ],
        ];

        $i = 1;
        foreach ($clients as $item) {
            $data = new Client();
            $data->setTranslations('name', $item['name']);
            $data->email = 'test@gmail.com';
            $data->link = 'test';
            $data->phone = '123456798';
            $data->image = '/storage/images/about/' . rand(1,15) . '.jpg';
            $data->order = $i;
            $data->save();

            $i++;
        }



        $services = [
            [
                "title" => [
                    'ar' => 'الإستشارة' ,
                    'en' => 'Counseling' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
                "icon" => '<i class="fa-solid fa-hat-chef"></i>',
            ],
            [
                "title" => [
                'ar' => 'التدريب' ,
                'en' => 'training' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
                "icon" => '<i class="fa-solid fa-user-chef"></i>',
            ],
            [
                "title" => [
                    'ar' => 'التثبيت' ,
                    'en' => 'installation' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
                "icon" => '<i class="fa-sharp fa-regular fa-microwave"></i>',
            ]
        ];

        $i = 1;
        foreach ($services as $item) {
            $data = new Service();
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('description', $item['description']);
            $data->image = '/storage/images/services/' . rand(1,6) . '.png';
            $data->icon = $item['icon'];
            $data->order = $i;
            $data->save();

            $i++;
        }
        
        $type_team = [
            [
                "type" => [
                    'ar' => 'الإداريين' ,
                    'en' => 'Administrators' ,
                ],
            ],
            [
                "type" => [
                    'ar' => 'الفنيين' ,
                    'en' => 'technicians' ,
                ],
            ],
            [
                "type" => [
                    'ar' => 'المهندسين' ,
                    'en' => 'engineers' ,
                ],
            ],
            [
                "type" => [
                    'ar' => 'التسويق' ,
                    'en' => 'Marketing' ,
                ],
            ],
        ];

        $i = 1;
        foreach ($type_team as $item) {
            $data = new TeamMemberType();
            $data->setTranslations('type', $item['type']);
            $data->save();
            $i++;
        }


        $teams = [
            [
                "title" => [
                    'ar' => 'أسامة الهاشمي' ,
                    'en' => 'Osama Al-Hashemi' ,
                ],
                "email" => 'Osama@alahlia.ae',
                "completed_projects" => '25',
                "position" => [
                    'ar' => 'المدير التنفيذي' ,
                    'en' => 'CEO' ,
                ],
                "support" => [
                    'ar' => 'دعم فني دائم' ,
                    'en' => 'support' ,
                ],
                "bio" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'محمد عمر' ,
                    'en' => 'Mohamed Omar' ,
                ],
                "email" => 'Omar@alahlia.ae',
                "completed_projects" => '35',
                "position" => [
                    'ar' => 'مدير التسويق' ,
                    'en' => 'Director of Marketing' ,
                ],
                "support" => [
                    'ar' => 'دعم فني دائم' ,
                    'en' => 'support' ,
                ],
                "bio" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'سامي الأحمدي' ,
                    'en' => 'Sami Al-Ahmadi' ,
                ],
                "email" => 'Sami@alahlia.ae',
                "position" => [
                    'ar' => 'محاسب' ,
                    'en' => 'accountant' ,
                ],
                "support" => [
                    'ar' => 'دعم فني دائم' ,
                    'en' => 'support' ,
                ],
                "bio" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'عبدالله سالم' ,
                    'en' => 'Abdullah Salem' ,
                ],
                "email" => 'Salem@alahlia.ae',
                "position" => [
                    'ar' => 'العلاقات العامة' ,
                    'en' => 'Public relations' ,
                ],
                "support" => [
                    'ar' => 'دعم فني دائم' ,
                    'en' => 'support' ,
                ],
                "bio" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'ابراهيم القاضي' ,
                    'en' => 'Ibrahim Al-Qadi' ,
                ],
                "email" => 'Ibrahim@alahlia.ae',
                "position" => [
                    'ar' => 'مشرف عام' ,
                    'en' => 'general supervisor' ,
                ],
                "support" => [
                    'ar' => 'دعم فني دائم' ,
                    'en' => 'support' ,
                ],
                "bio" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'احمد ابراهيم' ,
                    'en' => 'Ahmed Ibrahim' ,
                ],
                "email" => 'Ahmed@alahlia.ae',
                "position" => [
                    'ar' => 'مستشار' ,
                    'en' => 'advisor' ,
                ],
                "support" => [
                    'ar' => 'دعم فني دائم' ,
                    'en' => 'support' ,
                ],
                "bio" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ]

        ];

        $i = 1;
        foreach ($teams as $item) {
            $data = new Team();
            $data->team_member_type_id = rand(1,4);
            $data->setTranslations('position', $item['position']);
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('bio', $item['bio']);
            $data->setTranslations('address', $item['bio']);
            $data->experience = rand(2,15);
            $data->image = '/storage/images/team/' . rand(1,7) . '.png';
            $data->completed_projects = rand(10,50);
            $data->support = $item['support'];
            $data->langs = 'ar - en';
            $data->phone = '123456789';
            $data->email = $item['email'];
            $data->order = $i;
            $data->save();

            $i++;
        }


        $projects = [
            [
                "name" => [
                    'ar' => 'مشروع أبو ظبي بالخالدية' ,
                    'en' => 'Abu Dhabi project in Khalidiya' ,
                ],
                "client" => [
                    'ar' => 'فندق الدوحة' ,
                    'en' => 'Doha Hotel' ,
                ],
                "city" => [
                    'ar' => 'أبو ظبي' ,
                    'en' => 'Abu Dhabi' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "name" => [
                    'ar' => 'مشروع مقهى الملكة' ,
                    'en' => "Queen's Café project" ,
                ],
                "client" => [
                    'ar' => 'مقهى الملكة' ,
                    'en' => "Queen's Café" ,
                ],
                "city" => [
                    'ar' => 'دبي' ,
                    'en' => 'Dubai' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "name" => [
                    'ar' => 'مشروع مطعم الشاطئ' ,
                    'en' => "Beach restaurant project" ,
                ],
                "client" => [
                    'ar' => 'مطعم الشاطئ' ,
                    'en' => "Beach restaurant" ,
                ],
                "city" => [
                    'ar' => 'الشارقة' ,
                    'en' => 'Sharjah' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "name" => [
                    'ar' => 'مشروع مقهى الملكة' ,
                    'en' => "Queen's Café project" ,
                ],
                "client" => [
                    'ar' => 'مقهى الملكة' ,
                    'en' => "Queen's Café" ,
                ],
                "city" => [
                    'ar' => 'دبي' ,
                    'en' => 'Dubai' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "name" => [
                    'ar' => 'مشروع مقهى الملكة' ,
                    'en' => "Queen's Café project" ,
                ],
                "client" => [
                    'ar' => 'مقهى الملكة' ,
                    'en' => "Queen's Café" ,
                ],
                "city" => [
                    'ar' => 'الدوحة' ,
                    'en' => 'Doha' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],

        ];

        $i = 1;
        foreach ($projects as $item) {
            $data = new Project();
            $data->project_type_id = rand(1,4);
            $data->setTranslations('name', $item['name']);
            $data->setTranslations('client', $item['client']);
            $data->setTranslations('city', $item['city']);
            $data->setTranslations('description', $item['description']);
            $data->contract_value = rand(30,70) .'K AED';
            $data->image = '/storage/images/projects/' . $i . '.png';
            $startDate = strtotime('2022-01-01'); // تاريخ البداية
            $endDate = strtotime('2023-12-31'); // تاريخ النهاية
            $randomTimestamp = rand($startDate, $endDate);
            $randomDate = date('Y-m-d', $randomTimestamp); // تنسيق التاريخ
    
            $data->consultant = 'consultant';
            $data->contract_duration = "3 years";
            $data->start = $randomDate;

            $startDate = strtotime('2022-01-01'); // تاريخ البداية
            $endDate = strtotime('2023-12-31'); // تاريخ النهاية
            $randomTimestamp = rand($startDate, $endDate);
            $randomDate = date('Y-m-d', $randomTimestamp); // تنسيق التاريخ

            $data->end_date = $randomDate;
            $data->order = $i;
            $data->save();
            
            for ($x=0; $x < 5; $x++) { 
                $dataImage = new ProjectImages();
                $dataImage->project_id = $data->id;
                $dataImage->image = '/storage/images/projects/' . rand(1,8) . '.png';
                $dataImage->save();
            }

            $i++;
        }


        $type_projects = [
            [
                "type" => [
                    'ar' => 'مطابخ' ,
                    'en' => 'Kitchens' ,
                ],
            ],
            [
                "type" => [
                    'ar' => 'إستشارات' ,
                    'en' => 'Consulting' ,
                ],
            ],
            [
                "type" => [
                    'ar' => 'التدريب' ,
                    'en' => 'training' ,
                ],
            ],
            [
                "type" => [
                    'ar' => 'تركيب' ,
                    'en' => 'installation' ,
                ],
            ],
        ];

        $i = 1;
        foreach ($type_projects as $item) {
            $data = new ProjectType();
            $data->setTranslations('type', $item['type']);
            $data->save();
            $i++;
        }


        $contacts = [
            [
                "title" => [
                    'ar' => 'أبو ظبي' ,
                    'en' => 'Abu Dhabi' ,
                ],
                "address" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
                "location" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'Dubai' ,
                    'en' => 'دبي' ,
                ],
                "address" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
                "location" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'الشارقة' ,
                    'en' => 'Sharjah' ,
                ],
                "address" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
                "location" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
        ];

        $i = 1;
        foreach ($contacts as $item) {
            $data = new Contact();
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('location', $item['location']);
            $data->setTranslations('address', $item['address']);
            $data->phone = '+971563223241';
            $data->office_phone = '+971562213545';
            $data->branch_date = '3 سنوات';
            $data->email = 'info@alahliakitchens.ae';
            $data->maps = '<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14523.926166690082!2d54.357658!3d24.4860964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sae!4v1689679934279!5m2!1sen!2sae" width="600" height="450" v-scroll-reveal data-aos-delay="150"></iframe>';
            $data->image = '/storage/images/contact/our-brnch1.png';            
            $data->icon = '/storage/images/contact/abudhabi.png';
            $data->order_timeline = $i;
            $data->save();
            
            $i++;
        }

        $social = [
            [
                "link_first" => 'https://www.facebook.com/',
                "link_last" => 'alahlia',
                "title" => 'facebook',
                "icon" => '<i class="fa-brands fa-facebook-f"></i>',
            ],
            [
                "link_first" => 'https://api.whatsapp.com/send?phone=',
                "link_last" => '012346789',
                "title" => 'whatsapp',
                "icon" => '<i class="fa-brands fa-whatsapp"></i>',
            ],
            [
                "link_first" => 'https://t.me/',
                "link_last" => 'alahlia',
                "title" => 'telegram',
                "icon" => '<i class="fa-brands fa-telegram"></i>',
            ],
            [
                "link_first" => 'https://instagram.com/',
                "link_last" => 'alahlia',
                "title" => 'instagram',
                "icon" => '<i class="fa-brands fa-instagram"></i>',
            ],
    
        ];

        $i = 1;
        foreach ($social as $item) {
            $data = new Social();
            $data->parent_id = 0;
            $data->link_first = $item['link_first'];
            $data->link_last = $item['link_last'];
            $data->title = $item['title'];
            $data->icon = $item['icon'];
            $data->order = $i;
            $data->save();
            
            $i++;
        }




        $posts = [
            [
                "title" => '5 أشياء يمكنك تجنبها عند تركيب معدات مطبخ جديد' ,
                "description" => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                "lang" => "ar"
            ],
            [
                "title" => '5 أشياء يمكنك تجنبها عند تركيب معدات مطبخ جديد' ,
                "description" => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                "lang" => "ar"
            ],
            [
                "title" => '5 أشياء يمكنك تجنبها عند تركيب معدات مطبخ جديد' ,
                "description" => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                "lang" => "ar"
            ],
            [
                "title" => '5 أشياء يمكنك تجنبها عند تركيب معدات مطبخ جديد' ,
                "description" => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                "lang" => "ar"
            ],
            [
                "title" => '5 أشياء يمكنك تجنبها عند تركيب معدات مطبخ جديد' ,
                "description" => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                "lang" => "ar"
            ],
            [
                "title" => '5 things to avoid when installing new kitchen equipment' ,
                "description" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                "lang" => "en"
            ],
            [
                "title" => '5 things to avoid when installing new kitchen equipment' ,
                "description" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                "lang" => "en"
            ],

            [
                "title" => '5 things to avoid when installing new kitchen equipment' ,
                "description" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                "lang" => "en"
            ],

            [
                "title" => '5 things to avoid when installing new kitchen equipment' ,
                "description" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                "lang" => "en"
            ],
            [
                "title" => '5 things to avoid when installing new kitchen equipment' ,
                "description" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                "lang" => "en"
            ],

        ];

        $i = 1;
        foreach ($posts as $item) {
            $data = new Blog();
            $data->category_id = rand(5,8);
            $data->title = $item['title'];
            $data->description = $item['description'];
            $data->image = '/storage/images/blog/' . rand(1,8) . '.png';
            $data->active = 1;
            $data->trending = rand(0,1);
            $data->featured = rand(0,1);
            $data->lang = $item['lang'];
            $data->writer = "admin";
            $data->order = $i;
            $data->save();

            $i++;
        }


        $category_blog = [
            [
                "title" => [
                    'ar' => 'مطابخ' ,
                    'en' => 'Kitchens' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'إستشارات' ,
                    'en' => 'Consulting' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'التدريب' ,
                    'en' => 'training' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'تركيب' ,
                    'en' => 'installation' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
        ];

        $i = 1;
        foreach ($category_blog as $item) {
            $data = new Category();
            $data->model = 'Blog';
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('description', $item['description']);
            $data->order = $i;
            $data->save();
            $i++;
        }
        $tags = [
            [
                "title" => 'مطابخ' ,
                "lang" => "ar"
            ],
            [
                "title" => 'إستشارات' ,
                "lang" => "ar"
            ],
            [
                "title" => 'التدريب' ,
                "lang" => "ar"
            ],
            [
                "title" => 'تركيب' ,
                "lang" => "ar"
            ],
            [
                "title" => 'فنادق' ,
                "lang" => "ar"
            ],
            [
                "title" => 'Kitchens' ,
                "lang" => "en"
            ],
            [
                "title" => 'Consulting' ,
                "lang" => "en"
            ],
            [
                "title" => 'training' ,
                "lang" => "en"
            ],
            [
                "title" => 'installation' ,
                "lang" => "en"
            ],
            [
                "title" => 'Hotels' ,
                "lang" => "en"
            ],

        ];

        $i = 1;
        foreach ($tags as $item) {
            $data = new Tag();
            $data->title = $item['title'];
            $data->lang = $item['lang'];
            $data->save();
            $i++;
        }



        $slider = [
            [
                "title" => [
                    'ar' => 'مطابخ' ,
                    'en' => 'Kitchens' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'إستشارات' ,
                    'en' => 'Consulting' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'التدريب' ,
                    'en' => 'training' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'تركيب' ,
                    'en' => 'installation' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'مطابخ' ,
                    'en' => 'Kitchens' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'إستشارات' ,
                    'en' => 'Consulting' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'التدريب' ,
                    'en' => 'training' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'تركيب' ,
                    'en' => 'installation' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],

        ];

        $i = 1;
        foreach ($slider as $item) {
            $data = new Slider();
            $data->category_id = 1;
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('description', $item['description']);
            $data->image = '/storage/images/slider/' . rand(1,9) . '.png';
            $data->description = $item['title'];
            $data->save();
            $i++;
        }

        $Careers = [
            [
                "title" => [
                    'ar' => 'مدير تسويق العملاء' ,
                    'en' => 'Customer Marketing Manager' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'مدير تحسين محركات البحث' ,
                    'en' => 'SEO Manager' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],
            [
                "title" => [
                    'ar' => 'مدير الموارد البشرية' ,
                    'en' => 'HR' ,
                ],
                "description" => [
                    'ar' => "خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور “ريتشارد ماك لينتوك” (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي “consectetur”، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب “حول أقاصي الخير والشر” (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم “Lorem ipsum dolor sit amet..” يأتي من سطر في القسم 1.20.32 من هذا الكتابلوريم إيبسوم(Lorem Ipsum) Aldus" ,
                    'en' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32." ,
                ],
            ],

        ];

        $i = 1;
        foreach ($Careers as $item) {
            $data = new Career();    
            $data->category_id = 1;
            $data->setTranslations('title', $item['title']);
            $data->setTranslations('description', $item['description']);
            $data->role = 'role';
            $data->Job_type = 'Job_type';
            $data->setTranslations('experiance', $item['title']);
            $data->expected_salary = rand(15000,25000);
            $data->setTranslations('location', $item['description']);
            $data->image = '/storage/images/career/' . rand(1,9) . '.png';
            $data->save();
            $i++;
        }


        
 
        return "add data";
    }
}
