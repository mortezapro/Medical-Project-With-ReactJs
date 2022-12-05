import {Link} from "react-router-dom";

export default function Card(props){
    return(
        <>
            <div className="rounded-t-[12px] overflow-hidden">
                <img className="w-full h-full" src={props.image} alt={props.title} />
            </div>
            <div className="bg-white p-4 pb-10 shadow-sm leading-7 dark:bg-dark-secondary dark:color-secondary dark:border dark:border-gray-600">
                <h2 className="font-bold mb-3">{props.title}</h2>
                <p className="font-light color-dark-secondary">{props.summary}</p>
            </div>
            <div className="block text-center">
                <Link className="bg-primary color-secondary px-6 py-2 relative top-[-12px] rounded-[12px]" to={props.link}>
                    مشاهده
                </Link>
            </div>
        </>
    )
}