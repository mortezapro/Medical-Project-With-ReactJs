import React from "react";
import {Link} from "react-router-dom";
import Popular from "./Popular";
import CardOverlay from "components/common/cardOverlay/CardOverlay";
import corona from "assets/images/blogs/corona.png";
import drug from "assets/images/blogs/drug.png";
import stress from "assets/images/blogs/stress.png";
import parent from "assets/images/blogs/parent.png";

export default function IntroductionSection(){
    return(
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
                        <Popular/>
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
    )
}