import React from "react";
import {MagnifyingGlassIcon} from '@heroicons/react/24/outline';

export default class SearchZone extends React.Component {
    render() {
        return (
            <div className="container mx-auto px-4 md:px-0">
                <div className="grid pt-4 lg:grid-cols-4 md:grid-cols-2">
                    <div className=" lg:pl-2 md:pl-2 mb-4">
                        <input type="text" placeholder="جستجو ..." className="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-sm dark:focus:shadow-gray-600 dark:bg-dark-secondary dark:color-secondary dark:border-gray-600"/>
                    </div>
                    <div className="lg:px-2 md:pr-2 mb-4">
                        <select className=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-sm dark:focus:shadow-gray-600 dark:bg-dark-secondary dark:border-gray-600 dark:color-secondary">
                            <option defaultValue disabled hidden>دسته بندی پدر</option>
                            <option >دسته اول</option>
                            <option >دسته دوم</option>
                        </select>
                    </div>
                    <div className="lg:px-2 md:pl-2 mb-4">
                        <select className="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-sm dark:focus:shadow-gray-600 dark:bg-dark-secondary dark:border-gray-600 dark:color-secondary">
                            <option defaultValue disabled hidden>دسته بندی فرزند</option>
                            <option >دسته اول</option>
                            <option >دسته دوم</option>
                        </select>
                    </div>
                    <div className="lg:pr-2 md:pr-2 mb-4">
                        <button type="button" className="btn btn-primary w-full dark:bg-dark-secondary">
                            <MagnifyingGlassIcon className="w-6 h-6 inline-block ml-1"/>
                            جستجو
                        </button>
                    </div>
                </div>
            </div>
        )
    }
}