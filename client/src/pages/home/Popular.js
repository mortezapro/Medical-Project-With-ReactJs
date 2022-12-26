import React, {useEffect, useState} from "react";
import {axiosClient} from "components/common/axiosClient/AxiosClient";
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination } from 'swiper'
import 'swiper/css';
import CardOverlay from "components/common/cardOverlay/CardOverlay";

export default function Popular(){
    const [data,setData] = useState();
    const fetchPopularData = async () => {
        const response = await axiosClient.get('popular-swiper');
        return response.data;
    }
    useEffect( () => {
        fetchPopularData()
            .then((res) => setData(res))
            .catch((e) => console.log(e.message))
    }, [])

    if(data){
        return(
            <Swiper
                pagination={{ clickable: true }}
                modules={[Pagination]}
                spaceBetween={15}
                className="mySwiper"

            >
                {data.map((item, i) => (
                    <SwiperSlide key={i}>
                        <CardOverlay title={ item.title } image={ process.env.REACT_APP_IMAGES_URL +"blogs/"+ item.thumbnail } link="/post" />
                    </SwiperSlide>
                ))}
            </Swiper>
        )
    }
}