import "./CardOverlay.css"
import {Link} from "react-router-dom";
export default function CardOverlay(props){
    return(
        <div className="relative rounded-[12px]">
            <div className="relative rounded-[12px] overflow-hidden">
                <img className="w-full h-full" src={props.image} alt={props.title}/>
                <Link to={props.link}>
                    <div className="overlay absolute overflow-hidden top-0 w-full h-full z-40">
                        <div className="absolute bottom-3 w-full text-center text-secondary px-2">
                            <h2 className="text-md lg:text-xl ">{props.title}</h2>
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    )
}