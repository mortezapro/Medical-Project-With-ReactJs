import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination,Navigation } from 'swiper'

import {Link} from "react-router-dom";
import Header from "../../components/common/header/Header";
import anger from "../../assets/images/blogs/anger.jpg";
import drug from "../../assets/images/blogs/drug.png"
import corona from "../../assets/images/blogs/corona.png"
import parent from "../../assets/images/blogs/parent.png"
import stress from "../../assets/images/blogs/stress.png"
import "./Home.css"
import 'swiper/css';
import 'swiper/less';
import 'swiper/less/navigation';
import 'swiper/less/pagination';
import SearchZone from "../../components/SearchZone/SearchZone";
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
            <div className="card-item w-100 h-100 mb-0 shadow-md">
                <div className="card-image">
                    <img src={ item.image } alt=""/>
                </div>
                <div className="card-body">
                    <h2>{ item.title }</h2>
                    <p>{ item.description }</p>
                </div>
                <Link to="/">
                    <span className="btn-more">مشاهده</span>
                </Link>
            </div>
        </SwiperSlide>
    ))
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
    return(
        <main className="dark:bg-dark-secondary">
        <Header/>
        <SearchZone/>
        <div className="container mx-auto px-4 md:px-0">
            <section id="section-introduction">
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
            </section>
        </div>
        </main>
    )
}