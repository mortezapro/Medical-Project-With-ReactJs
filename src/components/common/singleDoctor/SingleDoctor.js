import {Link} from "react-router-dom";

export default function SingleDoctor(props){
    return(
        <div className="bg-secondary p-6 text-center rounded-md dark:bg-dark-secondary dark:border dark:border-gray-600" >
            <img className="w-35 h-35 rounded-full block mx-auto shadow-sm shadow-gray-500 mb-4" src={props.image} alt={props.name}/>
            <h3 className="color-dark-primary dark:color-secondary font-bold">{props.name}</h3>
            <p className="color-primary font-bold mt-2">{props.expert}</p>
            <div className="block pt-7 pb-2">
                <Link className="bg-primary color-secondary px-6 py-2 rounded-[12px] text-sm" to={props.link}>پروفایل پزشک</Link>
            </div>
        </div>
    )
}