<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{

    public function run(): void
    {
        $roomTypes = [
            [
                'hotel_id' => 1,
                'name' => 'Standard Room',
                'description' => 'A cozy standard room with all essential amenities for a comfortable stay.',
                'price_per_night' => 120.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://www.booking.com/hotel/dk/stege-nor.html?aid=356980&label=gog235jc-1DCAIoPUICZGtIM1gDaBSIAQGYATG4ARfIAQzYAQPoAQH4AQKIAgGoAgO4Ao-Ov7cGwAIB0gIkNzFjZmZlNzctYzc3NS00MzYyLTkxN2YtMjUzYmY3NWU0OWY22AIE4AIB&sid=8ddc28a9b103ad3b769f3dc1af705891&activeTab=photosGallery',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482610.jpg?k=9bb5e68349160ca5d5b07543ab2f73448e9d1447f6c8feb34421c577fde1dc99&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 1,
                'name' => 'Deluxe Room',
                'description' => 'A spacious deluxe room with city views and modern decor.',
                'price_per_night' => 180.00,
                'max_occupancy' => 3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/99121786.jpg?k=59d941000eddc8ac0b8b9961d601066d33c5364e3ea7b8ce289ea76fb1f6f94f&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74385856.jpg?k=1931df8a0adbed089a28b8c7adc84c71cc7826f8862bd6c40d8c361ef642ae64&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'minibar', 'coffee machine']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 2,
                'name' => 'Single Room',
                'description' => 'A compact room for solo travelers, offering a peaceful stay.',
                'price_per_night' => 85.00,
                'max_occupancy' => 1,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74485500.jpg?k=5c6b31b42bbaaf46692b8d692314562a79682a45300caeeac89ab328cb2731c6&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/99121818.jpg?k=bb1613aef2fc14343b743c0705a251b201b47e68a0ade9083aa5e044d6fbeb45&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'des']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 2,
                'name' => 'Family Room',
                'description' => 'A spacious room suitable for families, offering extra beds and a larger space.',
                'price_per_night' => 150.00,
                'max_occupancy' => 4,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/99121704.jpg?k=6a8cb7e2c618a92b6a6574b521006335356fbd2538394b03fb8237c2093dcd4c&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/99121757.jpg?k=bff8edb96ad9b6116b770ccac3c07fbde800d92598685e0b23291597ab10d79e&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'baby cri']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 3,
                'name' => 'Heritage Suite',
                'description' => 'A luxurious suite with a blend of modern comfort and historical ambiance.',
                'price_per_night' => 250.00,
                'max_occupancy' => 4,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/99121903.jpg?k=419b83a393fe6cd002cc666d3d19a110be69412cb614bfb61c27328886404c6c&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482603.jpg?k=bec49a4e2e67b930d4836323c5bdcb30af277de0c2a79d7f59a5878b70f4de88&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'minibar', 'historical deco']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 3,
                'name' => 'Standard Room',
                'description' => 'A comfortable room perfect for a short stay.',
                'price_per_night' => 120.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74483905.jpg?k=b0e32af26060a3865324b1fd2064b820eb13b83bd6224bd2b1f40f0d406e1fc8&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482619.jpg?k=1c5b6c111fc080d8604b7fade1fb0683e2a41f04980c234f6d19413ae3b05f5d&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'des']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 4,
                'name' => 'Fjord View Room',
                'description' => 'A room offering breathtaking views of the Roskilde Fjord.',
                'price_per_night' => 170.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74485645.jpg?k=28271709e66df85a630d95b02285dad3aab23945e54a7ea7336bb80e3fafe7c9&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74487333.jpg?k=116d012ae199277e98317f107caf2f905edad211b1ceb91fd8e8f311a7d32021&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'balcony', 'coffee machine']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 4,
                'name' => 'Standard Room',
                'description' => 'A cozy room with essential amenities for a comfortable stay.',
                'price_per_night' => 110.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482596.jpg?k=00b5df6ba141771e707fb3e49e5b20369b6276253b007f6df8142f4528156a67&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74485565.jpg?k=3c167b0421f8a137b3d3d5e7742991615df0ebe27a2665729c5155d3f244c93d&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 5,
                'name' => 'Skagen Suite',
                'description' => 'A peaceful suite with a serene atmosphere in the north of Denmark.',
                'price_per_night' => 200.00,
                'max_occupancy' => 3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482521.jpg?k=4970d87f84de6810b1e10cf683391430e6b76905b94d579ab85e7d2c51f3e423&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74487356.jpg?k=cea749c3578a7075e727f30de0db39de49ac4ebdcea2c5dccb5e4f3e55d2ccff&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'fireplace', 'minibar']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 5,
                'name' => 'Standard Room',
                'description' => 'A comfortable room ideal for travelers looking to explore Skagen.',
                'price_per_night' => 130.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74482574.jpg?k=4db63e590b5001fae15e1ba06d275331aa46344c582a4c03040e49b3bcdb0045&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74489135.jpg?k=0f497eff8a01153906baed5776c62191a363f015f1524fc02f2f43a70e888df6&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 6,
                'name' => 'Seaside Room',
                'description' => 'A cozy room with stunning ocean views.',
                'price_per_night' => 140.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/74485625.jpg?k=2257bd26171645b10c216394ba5910eaba62160500ddf99c01d73172cb513335&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916635.jpg?k=9645afd5ad575e59ed838f65ef2a7af9708c8bfa3da01f07dc69806020dac0de&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'balcon']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 6,
                'name' => 'Family Room',
                'description' => 'A spacious room with extra beds for families.',
                'price_per_night' => 200.00,
                'max_occupancy' => 4,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/150965419.jpg?k=1aa1a564c1901eae59e6ba29e8fe2b772052dea8c0d8b275707bdcb7574ee9aa&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916670.jpg?k=b68a47cb48b54d78ba18cd6a84cd53bfa44695e7c154e319ab7a918dad73b661&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'baby cri']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 7,
                'name' => 'Comfort Room',
                'description' => 'A well-furnished room designed for comfort.',
                'price_per_night' => 130.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/594730436.jpg?k=1c3564a121cd477328dea4df580312f3e1b6afcbf447d2a13678ad1aea025ca5&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916646.jpg?k=a9c478fb088e0b78b8e76a86d6c5344dcb7e729160ed5fa507006c3a804f992a&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 7,
                'name' => 'Suite',
                'description' => 'A spacious suite with modern decor and luxurious amenities.',
                'price_per_night' => 220.00,
                'max_occupancy' => 3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916638.jpg?k=8b48a616645f7274fa29a414acf48799e32207c830fde32d2a98db72529316a2&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916665.jpg?k=0ce9d106f9d9ca79c3084bd00dd8d566e4c231f73b867ae63dc8ebe095af4e3e&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'minibar']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 8,
                'name' => 'Castle View Room',
                'description' => 'Enjoy views of the famous Kronborg Castle from your room.',
                'price_per_night' => 175.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/357953638.jpg?k=0ee00f91c935ffe3fc7da40ca9c51c2646e964b7fd11e61faa17dd9fbdf5cbe7&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/357953531.jpg?k=d26cd74710e55e37e186adc5eba2a67678483970938018ec85a909c971099145&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'balcon']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 8,
                'name' => 'Heritage Room',
                'description' => 'A room with historical charm and modern comforts.',
                'price_per_night' => 150.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/299717447.jpg?k=0c164d67dac39c9aa8a4a81d53f5a13af5cbd8563381b06ba975de75679dfb97&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/68662855.jpg?k=0052e146715ce98475f8c8660fc5c18b7b2e6496ae48bef018196719749427a7&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 9,
                'name' => 'Nature Room',
                'description' => 'A tranquil room surrounded by nature, perfect for relaxation.',
                'price_per_night' => 130.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/145559945.jpg?k=555cfdb281b1a6fbeb9d686d448367d47803858af63cfc81f7e62df54310b322&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/69176180.jpg?k=40ea3b02120b561c2acb665441a3230feb569897ce2b2315f1cdb7e3dce2d194&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'balcon']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 9,
                'name' => 'Family Cabin',
                'description' => 'A cozy cabin for families, set in a natural landscape.',
                'price_per_night' => 210.00,
                'max_occupancy' => 5,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/152376282.jpg?k=452b32fad1a5f2fab83c1f22e798bab7f707ca8d50f6e45b60c63af7019d6ef8&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/357966071.jpg?k=fb2c0aafa0bbc2249e83506d1d0ef26685d1f23b5b08e15a27b1bc3441dc9d4d&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'kitchenett']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 10,
                'name' => 'Business Room',
                'description' => 'A room designed for business travelers with a workspace.',
                'price_per_night' => 140.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916636.jpg?k=a85d136c633aba342be3cc2dd0780f79bb7b4b78a57513107d57b8ee13bdea15&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916637.jpg?k=985c25fe0e9213a36d5ed3dbc37ec7bbb9c9f6eb2a6e13cea43e7190d64c0ec4&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'des']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 10,
                'name' => 'Executive Suite',
                'description' => 'An executive suite offering luxury and comfort for high-profile guests.',
                'price_per_night' => 300.00,
                'max_occupancy' => 3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916639.jpg?k=c044e43322b88be4f43723d6d084387e44f079e575256d15cc93cc2d9500fa3e&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916641.jpg?k=f2ff7b9c2f1a24a8672820722612e2a4164ea9d7312c08620c0fcb933b27da30&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'minibar']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 11,
                'name' => 'Lakeside Room',
                'description' => 'A serene room with views of the Silkeborg lakes.',
                'price_per_night' => 180.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916652.jpg?k=8c58c998d153add014048a6000b66d89501984965acec1a86cc2a4ea19fb391f&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916660.jpg?k=ea705017efa074c45d539f9a3ba52d66ed75bc031dc39f36bb5752207f2d3f73&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'balcon']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 11,
                'name' => 'Nature Suite',
                'description' => 'A spacious suite offering a blend of comfort and natural beauty.',
                'price_per_night' => 220.00,
                'max_occupancy' => 3,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916666.jpg?k=8a3b061414f44700baeee13f5b42ba4db06116f678b82cbc5b8d508e46fddcbd&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916671.jpg?k=c1de7afbe47da7eb4d3c0488c759c0c2aefff7c86039e9c21e3957ccc959e7b3&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning', 'minibar']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'hotel_id' => 12,
                'name' => 'Conference Room',
                'description' => 'Ideal for business travelers attending conferences.',
                'price_per_night' => 150.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916689.jpg?k=cf106f3f4f0f4c15fae328d5be47eda6fa8151f96a0d299e77b4c2304ce96862&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/354916692.jpg?k=8a742581ac5067010e820535f85577f8d5a96df4ce0c242d13c5d5f77a362974&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'desk', 'meeting room acces']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 12,
                'name' => 'Standard Room',
                'description' => 'A comfortable room suitable for all guests.',
                'price_per_night' => 100.00,
                'max_occupancy' => 2,
                'images' => json_encode([
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/255286192.jpg?k=be590cac306b13ac4a5c6a26926256adeaab1489cc1d67e39ac2fc41132408da&o=&hp=1',
                    'https://cf.bstatic.com/xdata/images/hotel/max1280x900/594730435.jpg?k=74ba59348aa42ca55cfbd7dcc977b8463e0f1ee0ea0760b3324569cb9ecc19b2&o=&hp=1',
                ]),
                'amenities' => json_encode(['wifi', 'tv', 'air conditioning']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('room_types')->insert($roomTypes);
    }
}
