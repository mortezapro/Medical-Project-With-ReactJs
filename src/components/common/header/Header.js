import {Fragment, useEffect, useState} from 'react'
import {Link} from "react-router-dom";
import { Disclosure, Menu, Transition } from '@headlessui/react'
import { Bars3Icon, XMarkIcon,MoonIcon,SunIcon,UserIcon } from '@heroicons/react/24/outline'
import logo_sm from "../../../assets/images/logo/logo-sm.png"
import logo_lg from "../../../assets/images/logo/logo-lg.png"
import "./Header.css"
let toggleDarkIcon = <SunIcon className="h-6 w-6" aria-hidden="true" />
const navigation = [
    { name: 'خانه', href: '/', current: true },
    { name: 'مجله', href: '/blog', current: false },
    { name: 'فروشگاه', href: '/store', current: false },
    { name: 'درباره ما', href: '/about', current: false },
    { name: 'تماس با ما', href: '/contact', current: false },
]

function classNames(...classes) {
    return classes.filter(Boolean).join(' ')
}


export default function Header() {
    const [theme, setTheme] = useState(
        localStorage.getItem('theme') || 'light'
    );
    const toggleTheme = () => {
        if (theme === 'light') {
            setTheme('dark');
        } else {
            setTheme('light');
        }
        toggleDarkIcon = theme !== 'light' ? <SunIcon className="h-6 w-6" aria-hidden="true" /> : <MoonIcon className="h-6 w-6" aria-hidden="true" />
    };
    useEffect(() => {
        localStorage.setItem('theme', theme);
        document.body.className = theme;
    }, [theme]);
    return (
        <header>
            <Disclosure as="nav" className="dark:bg-dark-primary py-2">
                {({ open }) => (
                    <div className="container mx-auto px-4 md:px-0">
                        <div className="relative flex h-16 items-center justify-between">
                            <div className="absolute inset-y-0 right-0 flex items-center sm:hidden">
                                {/* Mobile menu button*/}
                                <Disclosure.Button className="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                                    <span className="sr-only">Open main menu</span>
                                    {open ? (
                                        <XMarkIcon className="block h-6 w-6" aria-hidden="true" />
                                    ) : (
                                        <Bars3Icon className="block h-6 w-6" aria-hidden="true" />
                                    )}
                                </Disclosure.Button>
                            </div>
                            <div className="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                                <div className="flex flex-shrink-0 items-center">
                                    <img
                                        className="block h-8 w-auto lg:hidden"
                                        src={logo_sm}
                                        alt="Your Company"
                                    />
                                    <img
                                        className="hidden h-8 w-auto lg:block"
                                        src={logo_lg}
                                        alt="Your Company"
                                    />
                                </div>
                                <div className="hidden sm:mr-6 sm:block">
                                    <div className="flex space-x-4">
                                        {navigation.map((item) => (
                                            <a
                                                key={item.name}
                                                href={item.href}
                                                className={classNames(
                                                    item.current ? 'bg-primary text-white ml-2' : 'dark:color-secondary hover:bg-primary hover:text-white mr-2',
                                                    'px-3 py-2 rounded-md text-sm font-medium'
                                                )}
                                                aria-current={item.current ? 'page' : undefined}
                                            >
                                                {item.name}
                                            </a>
                                        ))}
                                    </div>
                                </div>
                            </div>
                            <div className="absolute
                             left-0 flex items-center pr-2 sm:static sm:inset-auto sm:mr-6 sm:pr-0">
                                {/* Profile dropdown */}
                                <button
                                    onClick={toggleTheme}
                                    type="button"
                                    className="cursor-pointer rounded-full border border-current p-1 dark:bg-black dark:text-white"
                                >
                                    <span className="sr-only">Dark Mode</span>
                                    {toggleDarkIcon}
                                </button>
                                {/*<Link*/}
                                {/*    to="/login"*/}
                                {/*    className="rounded-full border border-current bg-gray-100 p-1 mr-3"*/}
                                {/*>*/}
                                {/*    ورود / عضویت*/}
                                {/*</Link>*/}
                                <Menu as="div" className="relative mr-3">
                                    {/*<Menu.Button className="flex rounded-full bg-gray-800 text-sm">*/}
                                    {/*    <span className="sr-only">Open user menu</span>*/}
                                    {/*    <img*/}
                                    {/*        className="h-8 w-8 rounded-full"*/}
                                    {/*        src="https://w1.pngwing.com/pngs/40/861/png-transparent-circle-silhouette-user-user-interface-avatar-menu-bar-css-sprites-data-personalization-thumbnail.png"*/}
                                    {/*        alt=""*/}
                                    {/*    />*/}
                                    {/*</Menu.Button>*/}
                                    <Menu.Button
                                        type="button"
                                        className="rounded-full border border-current p-1 dark:bg-black dark:text-white">
                                        <UserIcon className="h-6 w-6 rounded-full"/>
                                    </Menu.Button>

                                    <Transition
                                        as={Fragment}
                                        enter="transition ease-out duration-100"
                                        enterFrom="transform opacity-0 scale-95"
                                        enterTo="transform opacity-100 scale-100"
                                        leave="transition ease-in duration-75"
                                        leaveFrom="transform opacity-100 scale-100"
                                        leaveTo="transform opacity-0 scale-95"
                                    >
                                        <Menu.Items className="absolute left-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                            <Menu.Item>
                                                {({ active }) => (
                                                    <a
                                                        href="/"
                                                        className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                                                    >
                                                        پروفایل
                                                    </a>
                                                )}
                                            </Menu.Item>
                                            <Menu.Item>
                                                {({ active }) => (
                                                    <a
                                                        href="/"
                                                        className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                                                    >
                                                        تنظیمات
                                                    </a>
                                                )}
                                            </Menu.Item>
                                            <Menu.Item>
                                                {({ active }) => (
                                                    <a
                                                        href="/"
                                                        className={classNames(active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700')}
                                                    >
                                                        خروج
                                                    </a>
                                                )}
                                            </Menu.Item>
                                        </Menu.Items>
                                    </Transition>
                                </Menu>
                            </div>
                        </div>

                        <Disclosure.Panel className="sm:hidden">
                            <div className="space-y-1 px-2 pt-2 pb-3">
                                {navigation.map((item) => (
                                    <Disclosure.Button
                                        key={item.name}
                                        as="a"
                                        href={item.href}
                                        className={classNames(
                                            item.current ? 'bg-primary text-white' : 'dark:color-secondary hover:bg-primary hover:text-white',
                                            'block px-3 py-2 rounded-md text-base font-medium'
                                        )}
                                        aria-current={item.current ? 'page' : undefined}
                                    >
                                        {item.name}
                                    </Disclosure.Button>
                                ))}
                            </div>
                        </Disclosure.Panel>
                    </div>
                )}
            </Disclosure>
        </header>
    )
}