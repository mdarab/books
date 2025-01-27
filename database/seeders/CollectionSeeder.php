<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Collection;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections_data = [
            [
                'title' => 'مینا',
                'title_abbr' => 'mina',
                'intro' => <<<INTRO
                اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
                مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
                مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
                مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
                INTRO,
            ],
            [
                'title' => 'لذت خواندن',
                'title_abbr' => 'enjoyreading',
                'intro' => <<<INTRO
                اگر می‌خواهید از یادگیری زبان فارسی لذت ببرید، باید مهارت خواندن خود را تقویت کنید. این کتاب، با بهره‌گیری از اصول و مهارت‌های آموزشی مناسب، به شما کمک می کند تا:
                به کمک دانش قبلی خودتان فارسی را یاد بگیرید،
                دامنۀ واژگان خود را تقویت کنید،
                خودتان معنی متن را تشخیص دهید،
                سرعت خواندنتان را افزایش دهید و
                بدون کمک دیگران، هر متنی را به زبان فارسی بخوانید.
                متن های این کتاب بسیار جذاب و همه پسند و تصاویر درس ها نیز، اصیل، دیدنی و چشم نواز هستند. طراحی زیبای کتاب، لذت خواندن آن را دوچندان کرده است. در هر درس، دو مهارت برای تقویت خواندن و واژه معرفی شده است. یادگیری این مهارت ها به شما کمک خواهد کرد بدون نیاز به کمک دیگران، با دنیای زبان فارسی ارتباط برقرار کنید و از لذت دائمی آن بهره مند شوید. 
                INTRO,
            ],
            [
                'title' => 'ایران‌شناسی',
                'title_abbr' => 'iranology',
                'intro' => <<<INTRO
                مجموعۀ ایران‌شناسی بر مبنای برنامۀ درسی محتوامحور (Content-based instruction= CBI) تهیه شده‌است. در این شیوۀ آموزشی، محتوای دروس در قالبی آموزشی و علمی به زبان فارسی ارائه می‌شود و فارسی‌آموز، بدون آن که مستقیماً درگیر یادگیری زبان فارسی شود، آن را به خوبی یاد می‌گیرد. به علاوه، زبان فارسیِ وی به گونه‌ای تقویت می‌شود که در آینده قادر است به طور مستقل متون ایران‌شناسی را بخواند و دربارۀ ایران اطلاعات کسب نماید. مخاطبان اصلی این کتاب دانشجویان رشته‌های ایران‌شناسی و ضرق‌شناسی در دانشگاه‌های خارج از ایران و نیز علاقه‌مندان به موضوع ایران‌شناسی هستند. این مجموعه شامل سه جلد است که جلد اول آن از سطح میانی و فوق‌میانی شروع می‌شود. درس‌های هر جلد از مجموعۀ ایران‌شناسی ساختاری یکسان دارند و هر درس چند بخش اصلی دارد که عبارتند از آماده‌سازی، پیش از خواندن، متن، تمرین‌های درک مطلب، تمرین‌های گفتاری، تمرین‌های نوشتن و تمرین جست‌وجو. زبان‌آموزان در این مجموعه مفهوم واژه‌ها و اصطلاحات پرکاربرد را می‌آموزند. پس از آموزش این مجموعه زبان‌آموزان قادر خواهند بود مقاله‌ها یا گزارش‌هایی را که دربارۀ ایران است به راحتی بخوانند و سخنرانی‌های مرتبط با موضوع ایران و ویژگی‌های آن را بفهمند.
                INTRO,
            ],
            [
                'title' => 'گام اول',
                'title_abbr' => '1ststep',
                'intro' => <<<INTRO
                در یادگیری زبان فارسی، گام اول بسیار مهم و حیاتی است. در این گام، فارسی‌آموز باید با زبان فارسی مأنوس شود تا از یادگیری آن لذّت ببرد.
                اگر فارسی‌آموز، از ابتدا، تصویر شفاف و روشنی از زبان فارسی پیدا کند، آن را باسرعت و لذّت فراوان یادمی‌گیرد. گام اول کتابی است که با همین هدف و با اتکاء به تجربة چندین سالة آموزگاران و استادان زبان فارسی، در داخل و خارج از ایران، تألیف شده است. مهم‌ترین هدف کتاب این است که فارسی‌آموز از ابتدا زبان فارسی را بکار ببرد. همة تکلیف‌های کتاب، ارتباطی هستند؛ زیرا انجام هر یک از آنها مستلزم یک کنشِ زبانیِ هدفمند است.
                گام اول، زبان‌محور است و از ابتدا به همة مهارت‌های زبان توجه می‌کند. این کتاب، در طول 40 تا 60 ساعت آموزشی، فارسی‌آموز را با واژه‌ها، کارکردها، مفاهیم و ساخت‌های پایه و پربسامد زبان فارسی آشنا می‌کند.
                در گام اول، زبان فارسی از طریق بکارگیری آن آموخته می‌شود و فارسی‌آموز در پایان کتاب، می‌تواند به زبان فارسی حرف بزند، بخواند و حتی بنویسد.
                گام اول را با لذت بردارید، زیرا شروع هر کار نصف آن است.
                INTRO,
            ],
            [
                'title' => 'چارچوب',
                'title_abbr' => 'persianframe',
                'intro' => <<<INTRO
                «چارچوب» مجموعه‌ای 3 جلدی است که با هدف آموزش دستور زبان فارسی برای سطوح مقدماتی- پیش‌میانی، میانیفوق-میانی و پیشرفته برای فارسی‌آموزان خارجی طراحی شده است. با توجه به این‌که این کتاب بر تمام مهارت‌های زبانی توجه داشته است، می‌تواند به عنوان محتوایی مستقل برای آموزش زبان فارسی در یک دورۀ آموزشی درنظر گرفته شود.
                مهمترین ویژگی مجموعۀ چارچوب این است که بر پایه رهیافت‌های علمی، برآمده از آخرین دستاوردها، تدوین شده است و نخستین کتابی است که زبان فارسی را بر اساس «دستور آموزشی» تدریس می‌کند. در این مسیر، برای آموزش دستور بر نقش و کاربرد آن در «ارتباط» تمرکز دارد و شما می‎توانید به خوبی رابطۀ «کارکرد»، «معنا» و «صورت» را در این مجموعه مشاهده ‌کنید. 
                INTRO,
            ],
            [
                'title' => 'آموزش کاربردی واژه',
                'title_abbr' => 'persianinuse',
                'intro' => <<<INTRO
                مجموعۀ «آموزش کاربردی واژه‌» به آموزش واژه‌ها و عبارات پرکاربرد زبان فارسی که در بافت واقعی زبان استفاده می‌شوند، می‌پردازد و در سه جلد تألیف شده است. در جلد اول و دوم که ویژۀ‌ فارسی‌آموزان سطح مقدماتی و پیش‌میانی است، حدود 1600 واژه و عبارت‎ عینیِ پربسامد آموزش داده ‎می‏‌شود. هر جلد شامل 30 درس است که در 6 حوزۀ واژگانی دسته‎بندی شده‌اند و در مجموع 12 حوزۀ واژگانی مختلف را ‌پوشش می‌دهد.
                جلد سوم این مجموعه برای فارسی‌آموزان سطح میانی و فوق‌میانی تألیف شده است که بیش از 1300 واژۀ مفهومی و انتزاعی ‌را با دو رویکرد صریح و ضمنی آموزش می‎دهد. این کتاب، به لحاظ ساختار و محتوا با دو جلد پیشین بسیار متفاوت است و برای زبان‌‎آموزانی مناسب است که می‎خواهند برای آزمون‌های رسمی زبان فارسی و ورود به دانشگاه‌های ایران آماده شوند. آنها در این جلد می‌توانند با واژه‌‏های عمومی و نیمه‌تخصصی بسیاری آشنا شوند.
                INTRO,
            ],
            [
                'title' => 'شیراز',
                'title_abbr' => 'shiraz',
                'intro' => <<<INTRO
                مجموعۀ آموزش زبان فارسی «شیراز» یک مجموعۀ 4 جلدی چهارمهارتی است که با هدف آموزش زبان فارسی در مدارس متوسطه و به طور مشخص مدارس عرب‌زبان تدوین شده است. هر چند سایر فارسی‌آموزان نیز می‌توانند برای یادگیری زبان فارسی از آن استفاده کنند. جلد نخست این مجموعه مناسب فارسی‌آموزان سطح مقدماتی و سه جلد دیگر به ترتیب برای فارسی‌آموزان سطوح پیش‌میانی، میانی و فوق‌میانی در نظر گرفته شده است. هر جلد این مجموعه شامل 18 درس است که در قالب 6 بخش ارائه می‌گردد. ساختار هر بخش به شرح زیر است:
                <ol><li>آماده‌سازی</li><li>درس اول: واژه، دستور، گفتگو، تلفظ</li><li>درس دوم: واژه، دستور، گفتگو، تلفظ</li><li>درس سوم: شنیدن، صحبت‌کردن، خواندن، نوشتن</li><li>مرور</li></ol>
                از مهم‌ترین ویژگی‌های مجموعه‌ی شیراز می‌توان به موارد زیر اشاره کرد:
                <ol><li>با توجه به اینکه جامعه‌ی هدف این مجموعه، فارسی‌آموزان عرب‌زبان هستند و میان نویسه‌های فارسی و عربی تشابه فراوانی وجود دارد، رویکرد این مجموعه به آموزش حروف و صداها، تمرکز بر برجسته‌سازی موارد تشابه و اختلاف در زبان فارسی و عربی بوده است. به این منظور، پیش از آغاز دروس کتاب اول، در بخش «حرف‌ها و صداها»، نمایی از تمامی نویسه‌ها و تلفظ آنها داده شده است. از ویژگی‌های این بخش آن است که واژه‌های نمونه به همراه تصویر ارائه شده‌اند تا این بخش برای فارسی‌آموزان معنادارتر و عینی‌تر شود. آموزش حروف و صداها در این کتاب، به این نمای کلی محدود نمی‌شود و در درس‌های اول و دوم هر بخش در قسمتی تحت عنوان «تلفظ»، تمایزهایی که میان تلفظ حروف در فارسی و عربی وجود دارد همراه با مثال‌های مختلف آموزش داده خواهد شد. در انتهای صفحه‌ی «تلفظ»، یک داستانک تصویری با مکالمه‌هایی کوتاه و ساده در نظر گرفته شده تا تلفظ حروف مورد نظر در قالبی جذاب ارائه و تمرین شود.</li><li>در این مجموعه، گونۀ گفتاری زبان فارسی همزمان با گونۀ نوشتاری آموزش داده می‌شود و به طور مشخص در صفحات «گفتگو»، «شنیدن» و «صحبت‌کردن» گونه‌ی گفتاری مورد استفاده و توجه قرار گرفته است.</li><li>آموزش دستور در این مجموعه، همراه با تصویر و به صورت غیرمستقیم است. محتوای استفاده‌شده در بخش «دستور» همراستا با محتوای واژگانی و کارکردی آن بخش است و در اغلب موارد با ماجراهای داستانی بخش «گفتگو» در هر درس ارتباط دارد.</li><li>کارکردهای زبانی در بخش «گفتگو» ارائه شده‌اند. در درس‌های اول و دوم هر بخش صفحه‌ای تحت عنوان «گفتگو» وجود دارد و شامل یک موقعیت داستانی منسجم در قالب سه یا چهار گفتگوی کوتاه است. این گفتگوها علاوه بر پوشش کارکرد/ کارکردهای مورد نظر درس، محتوای واژگانی و دستوری درس را نیز در برمی‌گیرند.</li><li>فعالیت‌های تمرینی این مجموعه بر مبنای رویکرد ارتباطی و تکلیف‌محور تدوین و اغلب آنها به صورت فعالیت‌هایی تعاملی و با عنوان‌های تمرین‌های «دونفره» یا «گروهی» ارائه شده‌اند.</li><li>از ویژگی‌های منحصربه‌فرد این مجموعه، درنظرگرفتن شخصیت‌های داستانی ثابت در کل مجموعه و تصویرسازی آنها به منظور جذابیت و همراهی دانش‌آموزان بوده است.</li><li>هر بخش این مجموعه، با یک صفحۀ «آماده‌سازی» آغاز و با صفحه‌ای با عنوان «مرور و تمرین» به پایان می‌رسد. صفحه‌ی «آماده‌سازی» شامل یک فعالیت ساده‌ی تصویری است که فارسی‌آموزان را برای ورود به آن بخش آماده می‌کند. در پایان هر بخش نیز به منظور یادآوری و مرور مطالب آموخته‌شده، تمرین‌هایی ارائه گردیده است. آخرین فعالیتی که در این قسمت گنجانده شده، گوش‌دادن به یک موسیقی است که شعر آن با توجه به محتوای آن بخش نوشته شده و فارسی‌آموزان می‌توانند با گوش‌دادن به آن و هم‌خوانی‌اش در کلاس، آموخته‌هایشان در آن بخش را تثبیت کنند.</li><li>در انتهای کتاب یک واژه‌نامه‌ی فارسی- انگلیسی- عربی ارائه شده است. در این قسمت، فارسی‌آموزان می‌توانند معادل عربی و انگلیسی واژه‌های به کار رفته در کتاب را پیدا کرده و تلفظ درست آنها را ملاحظه نمایند.</li></ol>
                INTRO,
            ],
            [
                'title' => 'سفر به ایران',
                'title_abbr' => 'trip2iran',
                'intro' => <<<INTRO
                دورۀ دوجلدی «سفر به ایران» از جمله کتاب‌های آموزش زبان فارسی با اهداف ویژه است و با هدف آموزش زبان فارسی به گردشگرانی که قصد بازدید از جاذبه‌های تاریخی، طبیعی، فرهنگی و هنری کشور ایران را دارند، تهیه شده است. در این کتاب، فرد با موقعیت‌های مختلفی که یک گردشگر به‌طور معمول در آن قرار گرفته و با آن مواجه می‌شود و گفتمان غالب و بی‌نشان در هر موقعیت آشنا شده و با مطالعۀ دروس و انجام تمرین‌های کتاب می‌تواند ارتباط نوشتاری و گفتاری مؤثری با فارسی‌زبانان برقرار کند.
                INTRO,
            ],
            [
                'title' => 'جملات کاربردی زبان فارسی',
                'title_abbr' => 'pracsen',
                'intro' => <<<INTRO
                کتاب جملات کاربردی بر اساس برنامه درسی موقعیتی نوشته شده است که در آن 700 جمله کاربردی زبان فارسی در 18 موقعیت آورده شده‌است؛ جملاتی معمولاً فارسی‌زبان‌ها در هر موقعیت بیشتر از آنها‌ استفاده می‌کنند. این برای سفر، یادگیری فارسی با اهداف ویژه و یادگیری موقعیتی زبان فارسی  مفید خواهد بود.
                INTRO,
            ],
            [
                'title' => 'خواندن آمفا',
                'title_abbr' => 'amfareading',
                'intro' => <<<INTRO
                هر مهارت زبانی، زیرمهارت‌هایی دارد که نوع‌ خواندن و ادراک ما از متن را تحث تأثیر قرار می‌دهد. در این 4 مجلد،12 زیرمهارت خواندن در قالب دوازده فصل (هر جلد سه فصل) ارائه می‌شود که هر فصل شامل 9 متن است که فقط و فقط به یک زیرمهارت خواندن می‌پردازد. این کتب در راستای آماده‌سازی فارسی‌آموزان / غیرفارسی‌زبانان برای آزمون‌های بین‌المللی زبان فارسی، مخصوصاً آمفا تهیه و تدوین شده‌اند.
                INTRO,
            ],
            [
                'title' => 'تربیت مدرس زبان فارسی',
                'title_abbr' => 'ttc',
                'intro' => null,
            ],
        ];
        foreach ($collections_data as $collection_data) {
            $collection = new Collection;
            $collection->title = $collection_data['title'];
            $collection->title_abbr = $collection_data['title_abbr'];
            $collection->intro = $collection_data['intro'];
            $collection->save();
        }
    }
}
