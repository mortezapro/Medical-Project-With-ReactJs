import Header from "components/common/header/Header";
import React from "react";
import { ReactComponent as Back } from "../../assets/images/point/back.svg";
import { ReactComponent as Star } from "../../assets/images/point/star.svg";
import { ReactComponent as Clock } from "../../assets/images/point/clock.svg";
import { ReactComponent as Eye } from "../../assets/images/point/eye.svg";
import { ReactComponent as Fillstar } from "../../assets/images/point/fillstar.svg";
import { ReactComponent as Bell } from "../../assets/images/point/bell.svg";
const numbers = [1, 2, 3, 4, 5];
export const Category = () => {
	return (
		<div>
			<Header />
			<div className="container mx-auto px-4 ">
				<div className="flex items-center">
					<Star className="fill-primary lg:w-5 lg:h-16" />
					<p className="text-primary mr-2">محبوب ترین ها</p>
				</div>

				<div className="flex justify-between ">
					<p className="text-xs text-gray-600">123 ویدیو</p>
					<div className="flex ">
						<p className="text-primary items-center ml-2">مشاهده همه</p>
						<Back className="fill-primary  text-primary lg:w-3 " />
					</div>
				</div>
			</div>
			<div className="flex">
				<div className="container grid grid-cols-5 gap-4 mx-auto px-4 py-2">
					{numbers.map((numbers) => {
						return (
							<div class="max-w-sm rounded overflow-hidden shadow-lg">
								<img className="w-full" src="family1.jpg" alt="family" />
								<div className="px-6 py-4">
									<div className="font-bold text-sm mb-2">
										نحوه شاد کردن خود و خانواده
									</div>
								</div>
								<div className="flex px-6 pt-4 pb-2">
									<div className="flex items-center">
										<Eye className="w-5 h-6 fill-primary" />
										<p className="text-gray-500 text-xs mx-2">223 بازدید |</p>
									</div>

									<div className="flex items-center">
										<Clock className="ml-2 w-3 h-6 fill-primary" />
										<p className="text-gray-500 text-xs">هفته پیش</p>
									</div>
								</div>
								<div className="flex justify-between px-6 py-4">
									<p className="text-gray-500">امتیاز</p>
									<div className="flex">
										<Fillstar className="ml-2 w-5 h-6 fill-gray-400" />
										<Fillstar className="ml-2 w-5 h-6 fill-primary" />
										<Fillstar className="ml-2 w-5 h-6 fill-primary" />
										<Fillstar className="ml-2 w-5 h-6 fill-primary" />
										<Fillstar className="ml-2 w-5 h-6 fill-primary" />
									</div>
								</div>
							</div>
						);
					})}
				</div>
			</div>
			<div className="container mx-auto px-4 ">
				<div className="flex items-center">
					<Bell className="fill-primary lg:w-5 lg:h-16" />
					<p className="text-primary mr-2">تازه ترین ها</p>
				</div>

				<div className="flex justify-between ">
					<p className="text-xs text-gray-600">123 ویدیو</p>
					<div className="flex ">
						<p className="text-primary items-center ml-2">مشاهده همه</p>
						<Back className="fill-primary  text-primary lg:w-3 " />
					</div>
				</div>
			</div>
			<div className="container grid grid-cols-5 gap-4 mx-auto px-4 py-2">
				{numbers.map((numbers) => {
					return (
						<div class="max-w-sm rounded overflow-hidden shadow-lg">
							<img className="w-full" src="family1.jpg" alt="family" />
							<div className="px-6 py-4">
								<div className="font-bold text-sm mb-2">
									نحوه شاد کردن خود و خانواده
								</div>
							</div>
							<div className="flex px-6 pt-4 pb-2">
								<div className="flex items-center">
									<Eye className="w-5 h-6 fill-primary" />
									<p className="text-gray-500 text-xs mx-2">223 بازدید |</p>
								</div>

								<div className="flex items-center">
									<Clock className="ml-2 w-3 h-6 fill-primary" />
									<p className="text-gray-500 text-xs">هفته پیش</p>
								</div>
							</div>
							<div className="flex justify-between px-6 py-4">
								<p className="text-gray-500">امتیاز</p>
								<div className="flex">
									<Fillstar className="ml-2 w-5 h-6 fill-gray-400" />
									<Fillstar className="ml-2 w-5 h-6 fill-primary" />
									<Fillstar className="ml-2 w-5 h-6 fill-primary" />
									<Fillstar className="ml-2 w-5 h-6 fill-primary" />
									<Fillstar className="ml-2 w-5 h-6 fill-primary" />
								</div>
							</div>
						</div>
					);
				})}
			</div>
		</div>
	);
};
