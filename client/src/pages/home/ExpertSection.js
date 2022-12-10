import React from "react";
import doctor1 from "assets/images/doctors/1.jpg"
import doctor2 from "assets/images/doctors/2.jpg"
import doctor3 from "assets/images/doctors/3.jpg"
import doctor4 from "assets/images/doctors/4.jpg"
import SingleDoctor from "components/common/singleDoctor/SingleDoctor";

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
let popularExpertCard = popularExpertsData.map((item, i) => (
    <SingleDoctor key={i} name={item.name} expert={item.expert} image={item.image} link={item.link} />
))
export default function ExpertSection(){
    return (
        <section className="py-20 dark:bg-dark-secondary dark:border-t dark:border-gray-600">
            <div className="container mx-auto px-4">
                <div className="grid grid grid-cols-1">
                    <div className="text-center text-2xl mb-10 after:content-[''] after:bg-primary after:block after:h-1 after:w-32 after:mx-auto after:mt-3">
                        <h2 className="dark:text-secondary">متخصصین</h2>
                    </div>
                </div>
                <div className="grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-5 gap-8">
                    {popularExpertCard}
                </div>
            </div>
        </section>
    )
}