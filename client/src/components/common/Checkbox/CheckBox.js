import { categoryList } from "./categoryList";
import { useState } from "react";

const Checkbox = () => {
	const filter = (e) => {
		const incheck = e.target.id;
	};

	return (
		<div>
			{categoryList.map((item) => {
				return (
					<div className="flex ">
						<input
							className="ml-2 bg-primary"
							type="checkbox"
							id={item.id}
							onClick={filter}
						/>

						<label htmlFor={item.id}>{item.lable}</label>
					</div>
				);
			})}
		</div>
	);
};
export default Checkbox;
