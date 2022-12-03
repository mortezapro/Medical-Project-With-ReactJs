import {useEffect,useState} from "react";
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

export default function Home(){
    const PopularData = [{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    },{
        title:"چطور از ابتلا به کرونای نوع جدید پیشگیری کنیم؟",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: corona,
        link:"/"
    },{
        title:"درمان دارویی اختلالات مصرف مواد مخدر",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: drug,
        link:"/"
    },{
        title:"نقش والدین در مراقبت از فرزندان در برابر معضلات اجتماعی",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: parent,
        link:"/"
    },{
        title:"مدیریت استرس با هدف افزایش بهره وری روزانه",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: stress,
        link:"/"
    },{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    }];
    const highlightData = [{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    },{
        title:"چطور از ابتلا به کرونای نوع جدید پیشگیری کنیم؟",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: corona,
        link:"/"
    },{
        title:"درمان دارویی اختلالات مصرف مواد مخدر",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: drug,
        link:"/"
    },{
        title:"نقش والدین در مراقبت از فرزندان در برابر معضلات اجتماعی",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: parent,
        link:"/"
    },{
        title:"مدیریت استرس با هدف افزایش بهره وری روزانه",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: stress,
        link:"/"
    },{
        title:"کنترل خشم و عصبانیت به کمک ذهن‌آگاهی",
        description: "اکثر ما انسان ها با  فشار روانی در زندگی روزمره خود رو به رو  هستیم ، گاهی اوقات عصبانیت ، پاسخی به فشار های روانی جامعه ای است که به سرعت در حال تغییر می باشد",
        image: anger,
        link:"/"
    }];
    let popularCarousel = PopularData.map((item, i) => (
        <SwiperSlide key={i}>
            <div className="card-item">
                <div className="card-image">
                    <img src={ item.image } alt=""/>
                </div>
                <div className="card-body bg-white shadow-sm dark:bg-dark-secondary dark:color-secondary dark:border dark:border-gray-600">
                    <h2>{ item.title }</h2>
                    <p>{ item.description }</p>
                </div>
                <Link className="block text-center" to="/">
                    <span className="btn-more">مشاهده</span>
                </Link>
            </div>
        </SwiperSlide>
    ))
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
    let highlightCarousel = highlightData.map((item, i) => (
        <SwiperSlide key={i}>
            <div className="card-item">
                <div className="card-image"><img src={ item.image } alt=""/>
                    <Link to="/">
                        <div className="card-overlay">
                            <div className="card-content bottom-25">
                                <h2>{ item.title }</h2>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>
        </SwiperSlide>
    ))
    let popularExpertCard = popularExpertsData.map((item, i) => (
        <div className="bg-secondary p-8 text-center rounded-md dark:bg-dark-secondary dark:border dark:border-gray-600" key={i}>
            <img className="w-35 h-35 rounded-full block mx-auto shadow-sm shadow-gray-500 mb-4" src={item.image} alt={item.name}/>
            <h3 className="color-dark-primary dark:color-secondary">{item.name}</h3>
            <span className="block mb-4 color-primary">{item.expert}</span>
            <Link className="btn btn-primary text-sm p-2" to="/">مشاهده پروفایل</Link>
        </div>
    ))
    return(
        <>
            <Header/>
            <main className="dark:bg-dark-secondary pt-5">
                <SearchZone/>
                <section id="section-introduction">
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="grid grid-cols-1 lg:grid-cols-4 text-center lg:gap-4">
                            <div className="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-1 lg:gap-4 pb-4">
                                <div className="lg:pl-0 pl-2">
                                    <div className="card-item">
                                        <div className="card-image">
                                            <img src={corona} alt=""/>
                                            <Link to="/">
                                                <div className="card-overlay">
                                                    <div className="card-content">
                                                        <h2>کنترل خشم و عصبانیت</h2>
                                                    </div>
                                                </div>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                                <div className="lg:pr-0 pr-2">
                                    <div className="card-item">
                                        <div className="card-image">
                                            <img src={drug} alt=""/>
                                            <Link to="/">
                                                <div className="card-overlay">
                                                    <div className="card-content">
                                                        <h2>کنترل خشم و عصبانیت</h2>
                                                    </div>
                                                </div>
                                            </Link>
                                        </div>
                                    </div>
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
                                    <div className="card-item">
                                        <div className="card-image">
                                            <img src={stress} alt=""/>
                                            <Link to="/">
                                                <div className="card-overlay">
                                                    <div className="card-content">
                                                        <h2>کنترل خشم و عصبانیت</h2>
                                                    </div>
                                                </div>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                                <div className="lg:pr-0 pr-2">
                                    <div className="card-item">
                                        <div className="card-image">
                                            <img src={parent} alt=""/>
                                            <Link to="/">
                                                <div className="card-overlay">
                                                    <div className="card-content">
                                                        <h2>کنترل خشم و عصبانیت</h2>
                                                    </div>
                                                </div>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="grid grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
                            <div className="pb-4 ml-0 lg:ml-2">
                                <Link to="/">
                                    <img src="https://mironmahmud.com/greeny/assets/ltr/images/promo/home/03.jpg" className="w-100" alt=""/>
                                </Link>
                            </div>
                            <div className="pb-4 mr-0 lg:mr-2">
                                <Link to="/">
                                    <img src="https://mironmahmud.com/greeny/assets/ltr/images/promo/home/03.jpg" className="w-100" alt=""/>
                                </Link>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="trends-section" className="bg-secondary dark:bg-dark-secondary dark:border-t dark:border-gray-600">
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="grid grid grid-cols-1">
                            <div className="section-title">
                                <h2 className="dark:color-secondary">پیشنهادات سایت</h2>
                            </div>
                            <div className="container-swiper">
                                <Swiper
                                    modules={[Pagination,Navigation]}
                                    navigation={{
                                        nextEl: ".custom-button-next",
                                        prevEl: ".custom-button-prev",
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
                                <div className="custom-button-prev dark:text-white">
                                    <ArrowRightIcon className="w-6 h-6"/>
                                </div>
                                <div className="custom-button-next dark:text-white">
                                    <ArrowLeftIcon className="w-6 h-6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="expert-section" className="bg-third text-white dark:bg-dark-secondary dark:border-t dark:border-gray-600">
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="grid grid grid-cols-1">
                            <div className="section-title">
                                <h2 className="color-primary dark:color-secondary">متخصصین</h2>
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