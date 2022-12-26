import React, {useEffect, useState} from "react";
import {axiosClient} from "components/common/axiosClient/AxiosClient";
import Card from "components/common/card/Card";
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination,Navigation } from 'swiper'
import 'swiper/css';
import {ArrowLeftIcon, ArrowRightIcon} from "@heroicons/react/24/outline";

export default function HighlightSection(){
    const [data,setData] = useState();
    const fetchPopularData = async () => {
        const response = await axiosClient.get('highlight');
        return response.data;
    }
    useEffect(() => {
        fetchPopularData()
            .then((res) => setData(res))
            .catch((e) => console.log(e.message))
    }, [])

    if(data){
        return(
            <section className="py-20 bg-secondary dark:bg-dark-secondary dark:border-t dark:border-gray-600">
                <div className="container mx-auto px-4">
                    <div className="grid grid grid-cols-1">
                        <div className="text-center text-2xl mb-10 after:content-[''] after:bg-primary after:block after:h-1 after:w-32 after:mx-auto after:mt-3">
                            <h2 className="dark:text-secondary">پیشنهادات سایت</h2>
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
                                {data.map((item, i) => (
                                    <SwiperSlide key={i}>
                                        <Card title={ item.title } summary={item.description} image={ "http://localhost:8000/assets/images/blogs/"+item.thumbnail } link="/post" />
                                    </SwiperSlide>
                                ))}
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
        )
    }
}