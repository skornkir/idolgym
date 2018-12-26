(function ($) {
    Drupal.behaviors.headervue = {
        attach: function (context, settings) {
            $(document).ready(function(e){
                console.log(settings);
                function updateTrainers(id){
                    axios.get( '/ajax/trainers/' + id)
                         .then(function (response) {
                            $('#wrapper-trainers').html(response.data.template);
                         })
                         .catch(function (error) {
                     });
                }

                function updatePrices(id){
                    axios.get('/ajax/prices/' + id)
                        .then(function (response) {
                            $('#wrapper-prices').html(response.data.template);
                        })
                        .catch(function (error) {
                        });
                }

                function updateShedule(id){
                    axios.get('/ajax/shedule/' + id)
                        .then(function (response) {
                            $('.schedule-wrapper').html(response.data.template);
                        })
                        .catch(function (error) {
                        });
                }

                const store = new Vuex.Store({
                    state: {
                        club_tid: Cookies.get('clubtid'),
                        club_name: Cookies.get('clubname'),
                        club_phone: Cookies.get('clubphone'),
                        club_fb: Cookies.get('clubfb'),
                        club_insta: Cookies.get('clubinsta'),
                        club_vk: Cookies.get('clubvk'),
                    },

                    mutations: {
                        update_club (state, newclub) {
                            state.club_tid = newclub.tid;
                            state.club_name = newclub.name;
                            state.club_phone = newclub.phone;
                            state.club_fb = newclub.fb;
                            state.club_insta = newclub.insta;
                            state.club_vk = newclub.vk;
                            updateTrainers(newclub.tid);
                            updatePrices(newclub.tid);
                            updateShedule(newclub.tid);
                        }
                    },
                    getters: {

                    }
                });

                var app = new Vue({
                    el: '#header_mid_inner',
                    created: function () {
                    },
                    store,
                    computed: {
                        club: function () {
                         /* let tid = Cookies.get('clubtid');
                          if(typeof tid == 'undefined'){
                            tid = 37
                            Cookies.set('clubtid', tid);

                          }
                          let name = Cookies.get('clubname');
                          if(typeof name == 'undefined'){
                            name = 'Нагатино';
                            Cookies.set('clubname', name);
                          }
                          return {name: name, tid: tid};*/
                          return {
                            'tid': this.$store.state.club_tid,
                            'name': this.$store.state.club_name,
                            'phone': this.$store.state.club_phone,
                            'vk': this.$store.state.club_vk,
                            'fb': this.$store.state.club_fb,
                            'insta': this.$store.state.club_insta,
                        };
                        }
                    },
               });

                var app = new Vue({
                    el: '#clubModal',
                    created: function () {

                    },
                    store,
                    data: {
                      clubs: settings.clubs,
                    },
                   /* computed: {
                        club: function () {
                          let tid = Cookies.get('clubtid');
                          if(typeof tid == 'undefined'){
                            tid = 37
                            Cookies.set('clubtid', tid);

                          }
                          let name = Cookies.get('clubname');
                          if(typeof name == 'undefined'){
                            name = 'Нагатино';
                            Cookies.set('clubname', name);
                          }
                          return {name: name, tid: tid};
                        }
                    },*/
                    methods: {
                        onClickClub: function (id, name, phone, vk, insta, fb) {
                            console.log(vk);
                            $('.club-modal .close').click();
                            Cookies.set('clubtid', id);
                            Cookies.set('clubname', name);
                            Cookies.set('clubphone', phone);
                            Cookies.set('clubvk', vk);
                            Cookies.set('clubinsta', insta);
                            Cookies.set('clubfb', fb);
                            store.commit('update_club',{tid: id, name: name, phone: phone, vk: vk, insta: insta, fb: fb});
                           /* axios.post('http://u13906.ocean.vps-private.net/ajax/club', {
                              tid: id,
                              name: name
                          })
                          .then(function (response) {
                          })
                          .catch(function (error) {
                          });*/
                        }
                    }
                });

               /* var app = new Vue({
                    el: '#clubModal',
                    created: function () {
                    },
                    store,
                    data: {
                        clubs: settings.clubs,
                    },
                    methods: {
                        onClickClub: function (id, name) {
                            $('.club-modal .close').click();
                            document.getElementById('clubModal').click();


                        }
                    }
                });*/
            });
        }
    };
})(jQuery);