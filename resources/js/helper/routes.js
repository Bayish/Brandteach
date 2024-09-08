import {trans} from "laravel-vue-i18n";


const core = {
    header: [{
        title: "Dashboard",
        link: "dashboard",
        icon: "compass",
        iconType: "far",
        children: [
            {title: "Dashboard", link: "dashboard", icon: "compass", iconType: "far"},
        ]
    },
        {title: "Company", link: "company", icon: "building", iconType: "far"},
        {title: "Teachers", link: "teacher", icon: "person-chalkboard", iconType: "fas"},
        {title: "Calendar", link: "calendar", icon: "calendar-days", iconType: "fas"},
        {title: "Courses", link: "course", icon: "users-rectangle", iconType: "fas"},
        {title: "Groups", link: "groups", icon: "users-rectangle", iconType: "fas"},
        {title: "Homeworks", link: "course", icon: "users-rectangle", iconType: "fas"},
        {title: "Students", link: "student", icon: "graduation-cap", iconType: "fas"},
        {title: "Messenger", link: "messenger", icon: "comment-dots", iconType: "fas"},
        {title: "Settings", link: "login", icon: "gear", iconType: "fas"},
    ],
    footer: [
        {title: "Support", link: "dashboard", icon: "compass", iconType: "far"},
        {title: "Logout", link: "login", icon: "building", iconType: "far"},
    ]
}

const storefront = {
    header:[
        {
            link: "home",
            icon: "compass",
            iconType: "far",
            metaTitle: "Онлайн курсы с наставниками | Brand Teach - Ваш источник знаний и обучения",
            metaDescription: "Просматривайте информацию о курсах, читайте отзывы и выбирайте свой путь обучения на сайте Brand Teach уже сегодня!",
            children: [
                {title: "Dashboard", link: "dashboard", icon: "compass", iconType: "far"},
            ]
        },
        {
            link: "courses",
            icon: "compass",
            iconType: "far",
            metaTitle: "Курсы онлайн: Подберите идеальный курс на Brand Teach",
            metaDescription: "Ищите онлайн курсы с наставниками? Посетите страницу курсов на Brand Teach и выберите подходящий курс из нашего разнообразного ассортимента.",
        },
        {
            link: "news",
            icon: "compass",
            iconType: "far",
            metaTitle: "Новости и обновления: Brand Teach - Всегда в курсе последних событий",
            metaDescription: "Узнавайте последние новости и обновления от Brand Teach. Будьте в курсе всех событий и развития нашей платформы для обучения онлайн.",
        },
        {
            link: "partners",
            icon: "compass",
            iconType: "far",
            metaTitle: "Станьте партнером Brand Teach: Онлайн курсы и CRM система для наставников и компаний",
            metaDescription: "Присоединяйтесь к нам в качестве наставника или компании. Управляйте курсами, взаимодействуйте с учениками и развивайтесь с нами!",
        },
        {
            link: "contact",
            icon: "compass",
            iconType: "far",
            metaTitle: "Свяжитесь с нами: Brand Teach - Контактная информация и обратная связь",
            metaDescription: "На странице контактов Brand Teach вы найдете всю необходимую информацию для связи с нами. Обратитесь к нам с вопросами или предложениями. Мы всегда рады помочь!",
        },
    ],
        footer: [
        {
            title: "Support",
            link: "dashboard",
            icon: "compass",
            iconType: "far",
            metaTitle: "",
            metaDescription: "",
        },
        {title: "Logout", link: "login", icon: "building", iconType: "far"},
    ]
}

export default {storefront, core};
