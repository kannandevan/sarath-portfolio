	<!-- SCRIPTS -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/venobox.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	
	<script>
        new WOW().init();
        
        // Navbar Sticky
        window.addEventListener('scroll', (ev) => {
			const navbar = document.getElementById("navbar");
			if (window.scrollY >= 50) {
				navbar.classList.add("nav-sticky");
			} else {
				navbar.classList.remove("nav-sticky");
			}
		});

        // --- PORTFOLIO LOGIC (STANDARD) ---
		document.addEventListener("DOMContentLoaded", () => {
			const categories = {
				"3d": {
					title: "3D Art",
					coverImage: "assets/img/portfolio/thumbs/3d-art-thumb.jpg",
					images: [
						{ src: "assets/img/portfolio/sofa1.jpg", thumb: "assets/img/portfolio/sofa1.jpg" },
						{ src: "assets/img/portfolio/sofa2.jpg", thumb: "assets/img/portfolio/sofa2.jpg" },
						{ src: "assets/img/portfolio/lattern1.jpg", thumb: "assets/img/portfolio/lattern1.jpg" },
						{ src: "assets/img/portfolio/lattern2.jpg", thumb: "assets/img/portfolio/lattern2.jpg" },
						{ src: "assets/img/portfolio/lattern3.jpg", thumb: "assets/img/portfolio/lattern3.jpg" },
						{ src: "assets/img/portfolio/1.jpg", thumb: "assets/img/portfolio/1.jpg" },
						{ src: "assets/img/portfolio/2.jpg", thumb: "assets/img/portfolio/2.jpg" },
						{ src: "assets/img/portfolio/3.jpg", thumb: "assets/img/portfolio/3.jpg" },
						{ src: "assets/img/portfolio/4.jpg", thumb: "assets/img/portfolio/4.jpg" },
						{ src: "assets/img/portfolio/5.jpg", thumb: "assets/img/portfolio/5.jpg" },
						{ src: "assets/img/portfolio/AEX_1.jpg", thumb: "assets/img/portfolio/AEX_1.jpg" },
						{ src: "assets/img/portfolio/AEX_2.jpg", thumb: "assets/img/portfolio/AEX_2.jpg" },
						{ src: "assets/img/portfolio/AEX_3.jpg", thumb: "assets/img/portfolio/AEX_3.jpg" },
						{ src: "assets/img/portfolio/CHAIR_1.jpg", thumb: "assets/img/portfolio/CHAIR_1.jpg" },
						{ src: "assets/img/portfolio/CHAIR_2.jpg", thumb: "assets/img/portfolio/CHAIR_2.jpg" },
						{ src: "assets/img/portfolio/EXTINGUSHER_1.jpg", thumb: "assets/img/portfolio/EXTINGUSHER_1.jpg" },
						{ src: "assets/img/portfolio/EXTINGUSHER_2.jpg", thumb: "assets/img/portfolio/EXTINGUSHER_2.jpg" },
						{ src: "assets/img/portfolio/EXTINGUSHER_3.jpg", thumb: "assets/img/portfolio/EXTINGUSHER_3.jpg" },
						{ src: "assets/img/portfolio/GRANADE_1.jpg", thumb: "assets/img/portfolio/GRANADE_1.jpg" },
						{ src: "assets/img/portfolio/GRANADE_2.jpg", thumb: "assets/img/portfolio/GRANADE_2.jpg" },
						{ src: "assets/img/portfolio/RIKSHAW_1.jpg", thumb: "assets/img/portfolio/RIKSHAW_1.jpg" },
						{ src: "assets/img/portfolio/RIKSHAW_2.jpg", thumb: "assets/img/portfolio/RIKSHAW_2.jpg" },
						{ src: "assets/img/portfolio/RIKSHAW_3.jpg", thumb: "assets/img/portfolio/RIKSHAW_3.jpg" },
						{ src: "assets/img/portfolio/TREASURE_1.jpg", thumb: "assets/img/portfolio/TREASURE_1.jpg" },
						{ src: "assets/img/portfolio/TREASURE_2.jpg", thumb: "assets/img/portfolio/TREASURE_2.jpg" },
						{ src: "assets/img/portfolio/TREASURE_3.jpg", thumb: "assets/img/portfolio/TREASURE_3.jpg" },
						{ src: "assets/img/portfolio/TREASURE_4.jpg", thumb: "assets/img/portfolio/TREASURE_4.jpg" }
					]
				},

				"design": {
					title: "Graphic Design",
					coverImage: "assets/img/portfolio/thumbs/graphic-design-thumb.jpg", 
					images: [
						{ src: "assets/img/portfolio/tropicana.jpg", thumb: "assets/img/portfolio/tropicana.jpg" },
						{ src: "assets/img/portfolio/Stand_Poster.jpg", thumb: "assets/img/portfolio/Stand_Poster.jpg" },
						{ src: "assets/img/portfolio/q3.jpg", thumb: "assets/img/portfolio/q3.jpg" },
						{ src: "assets/img/portfolio/q2.jpg", thumb: "assets/img/portfolio/q2.jpg" },
						{ src: "assets/img/portfolio/pet1.jpg", thumb: "assets/img/portfolio/pet1.jpg" },
						{ src: "assets/img/portfolio/pet2.jpg", thumb: "assets/img/portfolio/pet2.jpg" },
						{ src: "assets/img/portfolio/pet3.jpg", thumb: "assets/img/portfolio/pet3.jpg" },
						{ src: "assets/img/portfolio/pet4.jpg", thumb: "assets/img/portfolio/pet4.jpg" },
						{ src: "assets/img/portfolio/pet5.png", thumb: "assets/img/portfolio/pet5.png" },
						{ src: "assets/img/portfolio/pet6.jpg", thumb: "assets/img/portfolio/pet6.jpg" }
					]
				},

				"illustration": {
					title: "Illustration",
					coverImage: "assets/img/portfolio/thumbs/illustration-thumb.jpg", 
					images: [
						{ src: "assets/img/portfolio/Character.jpg", thumb: "assets/img/portfolio/Character.jpg" },
						{ src: "assets/img/portfolio/Eye.jpg", thumb: "assets/img/portfolio/Eye.jpg" }
					]
				},

				"ai": {
					title: "AI Generation",
					coverImage: "assets/img/portfolio/thumbs/ai-thumb.jpg", 
					images: [
						{ src: "assets/img/portfolio/KING.jpg", thumb: "assets/img/portfolio/KING.jpg" },
						{ src: "assets/img/portfolio/FIGTHING.jpg", thumb: "assets/img/portfolio/FIGTHING.jpg" },
						{ src: "assets/img/portfolio/PRINCE.jpg", thumb: "assets/img/portfolio/PRINCE.jpg" },
						{ src: "assets/img/portfolio/QUEEN.jpg", thumb: "assets/img/portfolio/QUEEN.jpg" },
						{ src: "assets/img/portfolio/hero_with_gun.jpg", thumb: "assets/img/portfolio/hero_with_gun.jpg" },
						{ src: "assets/img/portfolio/villan_with_gun.jpg", thumb: "assets/img/portfolio/villan_with_gun.jpg" },
						{ src: "assets/img/portfolio/gentleman_helicoptor.jpg", thumb: "assets/img/portfolio/gentleman_helicoptor.jpg" },
						{ src: "assets/img/portfolio/laughing_wanted.jpg", thumb: "assets/img/portfolio/laughing_wanted.jpg" },
						{ src: "assets/img/portfolio/char_1.jpg", thumb: "assets/img/portfolio/char_1.jpg" },
						{ src: "assets/img/portfolio/char_2.jpg", thumb: "assets/img/portfolio/char_2.jpg" },
						{ src: "assets/img/portfolio/char_3.jpg", thumb: "assets/img/portfolio/char_3.jpg" },
						{ src: "assets/img/portfolio/char_4.jpg", thumb: "assets/img/portfolio/char_4.jpg" },
						{ src: "assets/img/portfolio/char_5.jpg", thumb: "assets/img/portfolio/char_5.jpg" },
						{ src: "assets/img/portfolio/char_6.jpg", thumb: "assets/img/portfolio/char_6.jpg" },
						{ src: "assets/img/portfolio/POSTER.jpg", thumb: "assets/img/portfolio/POSTER.jpg" },
						{ src: "assets/img/portfolio/SCENE_01.jpg", thumb: "assets/img/portfolio/SCENE_01.jpg" },
						{ src: "assets/img/portfolio/SCENE_02.jpg", thumb: "assets/img/portfolio/SCENE_02.jpg" },
						{ src: "assets/img/portfolio/SCENE_03.jpg", thumb: "assets/img/portfolio/SCENE_03.jpg" },
						{ src: "assets/img/portfolio/SCENE_04.jpg", thumb: "assets/img/portfolio/SCENE_04.jpg" },
						{ src: "assets/img/portfolio/SCENE_05.jpg", thumb: "assets/img/portfolio/SCENE_05.jpg" },
						{ src: "assets/img/portfolio/SCENE_06.jpg", thumb: "assets/img/portfolio/SCENE_06.jpg" },
						{ src: "assets/img/portfolio/SCENE_07.jpg", thumb: "assets/img/portfolio/SCENE_07.jpg" }
					]
				}
			};

			const categoryList = document.getElementById("category-list");
			const categoryView = document.getElementById("category-view");
			const categoryGallery = document.getElementById("category-gallery");
			const categoryTitle = document.getElementById("category-title");
			const backBtn = document.getElementById("back-btn");

			// Update Thumbnails
			document.querySelectorAll(".category-card").forEach(thumb => {
				const catKey = thumb.dataset.category;
				if (categories[catKey] && categories[catKey].coverImage) {
					const imgTag = thumb.querySelector("img");
					if (imgTag) {
						imgTag.src = categories[catKey].coverImage;
					}
				}
			});

			function showCategory(catKey) {
				const catData = categories[catKey];
				if (!catData) return;

				categoryList.classList.add("hidden");
				categoryView.classList.remove("hidden");
				categoryTitle.textContent = catData.title;

				categoryGallery.innerHTML = "";
				
				// Standard Grid Layout
				catData.images.forEach(imgObj => {
					const div = document.createElement("div");
					div.className = "grid-col";
					div.innerHTML = `
                        <div class="portfolio-box">
                            <img src="${imgObj.thumb}" alt="Portfolio Image">
                            <div class="portfolio-overlay">
                                <a href="${imgObj.src}" class="view-btn lightbox" data-gall="${catKey}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    `;
					categoryGallery.appendChild(div);
				});

				jQuery('.lightbox').venobox({
					numeratio: true,
					infinigall: true
				});

				categoryView.scrollIntoView({ behavior: "smooth" });
			}

			function showList() {
				const wasCategorized = !categoryView.classList.contains("hidden");
				categoryView.classList.add("hidden");
				categoryList.classList.remove("hidden");

				if (wasCategorized) {
					document.getElementById("portfolio").scrollIntoView({ behavior: "smooth" });
				}
			}

			document.querySelectorAll(".category-card").forEach(thumb => {
				thumb.addEventListener("click", () => {
					const catKey = thumb.dataset.category;
					history.pushState({ category: catKey }, "", "#portfolio-" + catKey);
					showCategory(catKey);
				});
			});

			backBtn.addEventListener("click", () => {
				if (history.state && history.state.category) {
					history.back();
				} else {
					showList();
				}
			});

			window.addEventListener("popstate", (event) => {
				if (event.state && event.state.category) {
					showCategory(event.state.category);
				} else {
					showList();
				}
			});
			
			// Initial Load
			const hash = window.location.hash;
			if (hash && hash.startsWith("#portfolio-")) {
				const catKey = hash.replace("#portfolio-", "");
				if (categories[catKey]) {
				    history.replaceState({ category: catKey }, "", hash);
					showCategory(catKey);
				}
			}
		});
	</script>
</body>
</html>
