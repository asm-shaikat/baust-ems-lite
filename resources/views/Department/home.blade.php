<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body>
<div class="l-navbar flex w-full" id="nav-bar">
<div class="flex flex-col w-1/6 h-screen py-8 bg-dark border-r dark:bg-gray-900 dark:border-gray-700">
    
    <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Brand</h2>
    <div class="flex flex-col items-center mt-6 -mx-2">
        <img class="object-cover w-24 h-24 mx-2 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
        <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">John Doe</h4>
        <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400 hover:underline">john@example.com</p>
    </div>
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 dark:bg-gray-800 dark:text-gray-200" href="#">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Dashboard</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Accounts</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Tickets</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Settings</span>
            </a>
        </nav>
    </div>

</div>
<!-- write content here -->
<div class="w-5/6 ml-20 mt-4 p-4">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsam aut modi deleniti dolore quas, quisquam magni molestias ipsum voluptas eum explicabo natus repellendus sit aspernatur dolor ullam a tempora commodi. Officia animi doloribus neque nihil, accusantium maiores beatae quisquam! Doloribus voluptas aperiam totam, dolore consequatur ducimus minima tempora ex! Dolorem enim eaque suscipit officiis dolorum nisi ullam, veritatis quae provident natus consectetur ipsa eum, sapiente explicabo. Eum ut alias corporis voluptatum neque hic, quaerat optio saepe, accusantium deserunt asperiores voluptates amet! Nam exercitationem culpa inventore, dolore odio excepturi eos ullam aliquid cupiditate incidunt iste eum ipsam corrupti, minima nesciunt quasi asperiores repellat. Aliquam perferendis sapiente dolores ratione aspernatur! Facilis possimus veniam odit reiciendis quia ab cupiditate, magnam pariatur ad similique, laudantium, est ratione perspiciatis iure! Eligendi magnam minus et ad perspiciatis omnis cupiditate provident veritatis accusantium reiciendis dolorum aperiam deserunt, molestiae, illo illum modi voluptates consequuntur. Officia, consectetur corporis, quaerat reprehenderit assumenda hic consequuntur eligendi nihil eum ipsum voluptas tempore nam quos quis voluptatibus odio non sit fuga laboriosam at in quia accusamus porro dolorum. Repellat excepturi non eveniet sit iusto dolor, sunt, facere sapiente maiores quae molestias quo ex nulla in, temporibus at tenetur beatae ratione accusamus. Ipsum hic vel quaerat alias inventore dicta deserunt, quisquam, veritatis ut recusandae cum ex blanditiis magni praesentium temporibus cupiditate non nostrum corrupti. Dicta officiis, non explicabo molestias sapiente quidem repudiandae velit. Accusamus aliquid omnis error libero eveniet ad totam placeat voluptas perferendis, itaque dolore quaerat enim nulla id nisi. Assumenda optio nam doloremque corporis ullam accusantium, ducimus, itaque animi numquam explicabo voluptatibus laudantium porro molestias perferendis placeat minus nihil cupiditate. Illo totam officiis optio! Eaque quidem odio amet deserunt, at eum assumenda explicabo quam voluptate magni fugit hic, accusantium possimus quas? Nihil fugit cumque quibusdam vel vero ab, laborum architecto fugiat doloribus. Perferendis iure nisi nostrum inventore nam adipisci quos perspiciatis placeat itaque accusantium iste soluta voluptatem ex sit omnis, corrupti minima eaque repellat maxime suscipit totam consectetur. Libero excepturi quidem aperiam nam commodi dolor perspiciatis ullam debitis quis possimus, ducimus, odit adipisci! Similique sequi optio blanditiis velit ad. Totam nobis enim pariatur, tempora animi earum odio veniam quo inventore, blanditiis quasi maxime? Accusantium asperiores, est magnam ratione molestias adipisci, dolorem illo recusandae maxime sed et repudiandae voluptatum officiis natus aperiam provident quas aliquid eligendi unde sequi facere. Necessitatibus voluptatum repellat eligendi earum aut fugit facere obcaecati alias incidunt deleniti doloremque ipsam, sit blanditiis aliquid cupiditate quo ab! Eligendi aut nisi reiciendis voluptas architecto, totam quis maxime eveniet distinctio ipsam, non sunt! Corrupti aperiam quasi voluptatum necessitatibus nihil quia consequatur quam autem possimus neque quod iusto doloremque, eveniet, provident enim iure! Dolor repellendus harum eius odio laudantium. A et consequuntur voluptatum eum, hic harum obcaecati quam. Cum fuga maiores ullam et rerum aspernatur aliquid ea, quasi, optio tenetur deleniti quis obcaecati reprehenderit cupiditate nesciunt vero hic ad impedit. Optio ratione dolor voluptate minus rerum esse, cupiditate laborum vel aut in modi, dignissimos quia. Porro natus magnam maiores ut ipsa cum ipsam perferendis unde saepe, eligendi et. Vitae, quod numquam optio, corporis cupiditate dolor id cumque veniam delectus atque dolores voluptas perspiciatis, excepturi deleniti maxime doloribus ab perferendis! Harum id dolores voluptatibus. Ipsam ducimus minima amet ut corrupti pariatur, deleniti earum? Pariatur officiis incidunt temporibus reprehenderit laudantium ut. Molestiae sint asperiores beatae vel, at nesciunt, dicta perferendis ut quidem officiis quas assumenda, sunt enim deserunt! Odio, a! Ad dicta maiores quaerat! Animi libero eum, nesciunt ipsam expedita omnis adipisci iste veritatis aspernatur nihil alias laboriosam ipsum esse culpa, reprehenderit ad et inventore hic maxime. Veritatis minima, unde commodi cum necessitatibus iure vero culpa quod nemo distinctio eum repellendus, qui assumenda est nesciunt amet nisi consequuntur voluptatibus vel ipsam ut! Accusantium optio laboriosam atque magni animi suscipit a ad vel rem autem numquam consequatur eum expedita, totam quos rerum aliquam molestiae repudiandae. Officia placeat, quasi amet molestiae laudantium rerum veritatis eveniet voluptatum excepturi, mollitia cumque. Tempora, minima molestiae nihil numquam ipsa quibusdam molestias, quasi optio et voluptas voluptate nesciunt, aspernatur ratione. Alias, tenetur dolore explicabo impedit nisi cum, voluptatum placeat atque enim nulla ea ipsa officiis maxime tempora suscipit corrupti laborum debitis consequuntur exercitationem delectus rem! Illum, quo labore. Quibusdam minima aliquid facere nostrum aut dignissimos voluptates quo architecto adipisci! Ullam omnis enim, libero porro placeat, maiores culpa, voluptatibus corrupti quidem ipsa officia sequi vitae ex ut nostrum impedit unde eum vero! Tempore, nam rem suscipit illo ullam pariatur, quod expedita culpa est reiciendis doloremque facilis ut voluptatem in itaque consequuntur vitae repellat dolorum, totam laudantium nisi aperiam? Vitae, consectetur nesciunt inventore quaerat consequuntur fuga illo dolorum a perferendis ad? Asperiores rerum neque modi error illo accusamus qui fugiat voluptas, amet odio sed vero molestias provident quo tenetur nobis. Tenetur harum, atque illo quaerat possimus illum fuga dolore impedit adipisci quo labore placeat ipsum laboriosam necessitatibus quis ducimus reprehenderit aliquid voluptas accusamus vel repellendus? Obcaecati exercitationem assumenda ipsum ad possimus. Officia veritatis, ipsum, consequatur, praesentium dolores ipsam amet natus sapiente vitae possimus saepe perferendis laudantium. Facere aut laboriosam numquam eius quod non recusandae quos voluptatum. Numquam, molestiae, quis enim nisi ut hic excepturi alias exercitationem reprehenderit cum cumque provident deleniti doloremque, cupiditate aut necessitatibus itaque quidem? Saepe, aut unde? Molestias architecto dicta itaque tempora tenetur natus id rem rerum provident voluptatum est voluptate excepturi unde obcaecati ducimus eligendi optio quaerat minus beatae iure, cum perspiciatis? Culpa dolores possimus amet? Fugiat, adipisci. Quas cum error illo hic dolor eaque temporibus consectetur, eveniet dolorum incidunt tempore mollitia. Nobis ea pariatur iusto ab recusandae. Maxime odio optio asperiores, maiores, dicta nisi mollitia tempora quos ea tempore porro est, quidem deserunt reprehenderit nulla corporis. Maiores, officiis. Sapiente eaque corrupti cumque consequatur, eveniet assumenda officiis officia suscipit delectus similique animi iusto quae quaerat? Impedit harum labore quo dolorem eius mollitia accusantium laborum id. Voluptate harum illo quo dignissimos necessitatibus assumenda ipsam quod ullam numquam fuga quasi cum asperiores, perspiciatis iusto repellendus, dolorum cupiditate recusandae nobis. A dolorum consectetur facilis laudantium minima optio eveniet! In ratione quae voluptatem nam.</p>
</div>


</div>
</body>
</html>