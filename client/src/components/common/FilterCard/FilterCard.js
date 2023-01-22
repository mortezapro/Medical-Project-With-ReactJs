import React from "react";
import { Product } from "../Checkbox/categoryList";
export const FilterCard = () => {
	return (
		<>
			<div className="ml-10 shadow-lg rounded-2xl border-stone-600 shadow-stone-400 bg-stone-50 h-auto flex">
				<div className="grid grid-cols-4 gap-10 p-8">
					{Product.map((item) => {
						return (
							<div className="bg-stone-100 border-stone-200 border-2 rounded-2xl w-auto">
								<img className="rounded-t-lg" src="family1.jpg" />
								<div className=" relative flex flex-col gap-3 justify-center items-center text-center">
									<p>{item.title}</p>
									<p>{item.description}</p>
									<p className=" mb-5 text-primary">{item.price}تومان</p>
									<button className="absolute -bottom-4 bg-primary text-white rounded-full w-[50%]">
										خرید
									</button>
								</div>
							</div>
						);
					})}
				</div>
			</div>
		</>
	);
};
