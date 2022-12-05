import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination,Navigation } from 'swiper'
import { ArrowRightIcon,ArrowLeftIcon } from '@heroicons/react/24/outline'
import {Link} from "react-router-dom";
import Header from "../../components/common/header/Header";
import anger from "../../assets/images/blogs/anger.jpg";
import drug from "../../assets/images/blogs/drug.png"
import corona from "../../assets/images/blogs/corona.png"
import parent from "../../assets/images/blogs/parent.png"
import stress from "../../assets/images/blogs/stress.png"
import doctor1 from "../../assets/images/doctors/1.jpg"
import doctor2 from "../../assets/images/doctors/2.jpg"
import doctor3 from "../../assets/images/doctors/3.jpg"
import doctor4 from "../../assets/images/doctors/4.jpg"
import "./Home.css"
import 'swiper/css';
import SearchZone from "../../components/SearchZone/SearchZone";
import Footer from "../../components/common/footer/Footer";
import CardOverlay from "../../components/common/cardOverlay/CardOverlay";
import Card from "../../components/common/card/Card";
import SingleDoctor from "../../components/common/singleDoctor/SingleDoctor";

export default function Home(){
    const PopularData = [{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    },{
        title:"چطور از ابتلا به کرونای نوع جدید پیشگیری کنیم؟",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: corona,
        link:"/"
    },{
        title:"درمان دارویی اختلالات مصرف مواد مخدر",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: drug,
        link:"/"
    },{
        title:"نقش والدین در مراقبت از فرزندان در برابر معضلات اجتماعی",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: parent,
        link:"/"
    },{
        title:"مدیریت استرس با هدف افزایش بهره وری روزانه",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: stress,
        link:"/"
    },{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    }];
    const highlightData = [{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    },{
        title:"چطور از ابتلا به کرونای نوع جدید پیشگیری کنیم؟",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: corona,
        link:"/"
    },{
        title:"درمان دارویی اختلالات مصرف مواد مخدر",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: drug,
        link:"/"
    },{
        title:"نقش والدین در مراقبت از فرزندان در برابر معضلات اجتماعی",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: parent,
        link:"/"
    },{
        title:"مدیریت استرس با هدف افزایش بهره وری روزانه",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: stress,
        link:"/"
    },{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        summary: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    }];
    let popularExpertsData =[
        {
            name: "رضا حسنی",
            expert: "متخصص گوارش",
            image: doctor1,
            link: "/",
        },{
            name: "بیتا فرهمند",
            expert: "جراح پوست",
            image: doctor2,
            link: "/",
        },
        {
            name: "فرشاد قاضی",
            expert: "متخصص قلب",
            image: doctor3,
            link: "/",
        },{
            name: "رضا حسنی",
            expert: "متخصص گوارش",
            image: doctor4,
            link: "/",
        },{
            name: "بیتا فرهمند",
            expert: "جراح پوست",
            image: doctor1,
            link: "/",
        },
        {
            name: "فرشاد قاضی",
            expert: "متخصص قلب",
            image: doctor2,
            link: "/",
        },{
            name: "رضا حسنی",
            expert: "متخصص گوارش",
            image: doctor3,
            link: "/",
        },{
            name: "بیتا فرهمند",
            expert: "جراح پوست",
            image: doctor4,
            link: "/",
        },
        {
            name: "فرشاد قاضی",
            expert: "متخصص قلب",
            image: doctor1,
            link: "/",
        },{
            name: "رضا حسنی",
            expert: "متخصص گوارش",
            image: doctor2,
            link: "/",
        }

    ]
    let popularCarousel = PopularData.map((item, i) => (
        <SwiperSlide key={i}>
            <Card title={item.title} summary={item.summary} image={item.image} link={item.link} />
        </SwiperSlide>
    ))
    let highlightCarousel = highlightData.map((item, i) => (
        <SwiperSlide key={i}>
            <CardOverlay title={ item.title } image={ item.image } link="/post" />
        </SwiperSlide>
    ))
    let popularExpertCard = popularExpertsData.map((item, i) => (
        <SingleDoctor key={i} name={item.name} expert={item.expert} image={item.image} link={item.link} />
    ))
    return(
        <>
            <Header/>
            <main className="dark:bg-dark-secondary pt-5">
                <SearchZone/>
                <section className="pt-3 pb-10 lg:pb-20">
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="grid grid-cols-1 lg:grid-cols-4 text-center lg:gap-4">
                            <div className="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-1 lg:gap-4 pb-4">
                                <div className="lg:pl-0 pl-2">
                                    <CardOverlay title="کنترل خشم و عصبانیت" image={corona} link="/post" />
                                </div>
                                <div className="lg:pr-0 pr-2">
                                    <CardOverlay title="کنترل خشم و عصبانیت" image={drug} link="/post" />
                                </div>
                            </div>
                            <div className="col-span-2 pb-4 lg:pb-0">
                                <Swiper
                                    pagination={{ clickable: true }}
                                    modules={[Pagination]}
                                    spaceBetween={15}
                                    className="mySwiper"

                                >
                                    {highlightCarousel}
                                </Swiper>
                            </div>
                            <div className="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-1 lg:gap-4 pb-4">
                                <div className="lg:pl-0 pl-2">
                                    <CardOverlay title="کنترل خشم و عصبانیت" image={stress} link="/post" />
                                </div>
                                <div className="lg:pr-0 pr-2">
                                    <CardOverlay title="نقش والدین در مراقبت از فرزندان در برابر معضلات اجتماعی" image={parent} link="/post" />
                                </div>
                            </div>
                        </div>
                        <div className="grid grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                            <div className="pb-4 ml-0 lg:ml-2">
                                <Link to="/">
                                    <img src="https://mironmahmud.com/greeny/assets/ltr/images/promo/home/03.jpg" className="w-100 rounded-[12px]" alt=""/>
                                </Link>
                            </div>
                            <div className="pb-4 mr-0 lg:mr-2">
                                <Link to="/">
                                    <img src="https://mironmahmud.com/greeny/assets/ltr/images/promo/home/03.jpg" className="w-100 rounded-[12px]" alt=""/>
                                </Link>
                            </div>
                        </div>
                    </div>
                </section>
                <section className="py-20 bg-secondary dark:bg-dark-secondary dark:border-t dark:border-gray-600">
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="grid grid grid-cols-1">
                            <div className="text-center text-2xl mb-10 after:content-[''] after:bg-primary after:block after:h-1 after:w-32 after:mx-auto after:mt-3">
                                <h2 className="dark:color-secondary">پیشنهادات سایت</h2>
                            </div>
                            <div className="relative px-7 lg:px-9">
                                <Swiper
                                    modules={[Pagination,Navigation]}
                                    navigation={{
                                        nextEl: ".button-next",
                                        prevEl: ".button-prev",
                                    }}
                                    spaceBetween={10}
                                    effect="fade"
                                    breakpoints={{
                                        640: {
                                            slidesPerView: 1,
                                        },
                                        768: {
                                            slidesPerView: 2,
                                        },
                                        992: {
                                            slidesPerView: 4,
                                        },
                                    }}
                                    className="mySwiper"
                                >
                                    { popularCarousel }
                                </Swiper>
                                <div className="button-prev absolute z-20 top-1/2 right-0 cursor-pointer dark:text-white">
                                    <ArrowRightIcon className="w-6 h-6"/>
                                </div>
                                <div className="button-next absolute z-20 top-1/2 left-0 cursor-pointer dark:text-white">
                                    <ArrowLeftIcon className="w-6 h-6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="expert-section" className="py-20 dark:bg-dark-secondary dark:border-t dark:border-gray-600">
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="grid grid grid-cols-1">
                            <div className="text-center text-2xl mb-10 after:content-[''] after:bg-primary after:block after:h-1 after:w-32 after:mx-auto after:mt-3">
                                <h2 className="dark:color-secondary">متخصصین</h2>
                            </div>
                        </div>
                        <div className="grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                            {popularExpertCard}
                        </div>
                    </div>
                </section>
            </main>
            <Footer/>
        </>
    )
}