# specia-child
Child theme for the Constitution Party National website

## Installation
_What you need:_

* WordPress installed and updated to latest version [WordPress installation guide](https://codex.wordpress.org/Installing_WordPress)
* a copy of specia-child.zip on your desktop or download folder (do not unpack)

### Install Specia Theme
* Log in to the Administration panel by navigating to **your-website-address**/wp-admin in your browser
* Click "Appearance" -> "Themes" on the left sidebar
* Click "Upload Themes" button, to the right of the title "Add Themes"
* Click "Upload Themes" button, to the right of the title "Add Themes"
* Click "Browse", then navigate to your desktop or downloads folder
* Select the specia.zip file and click "Open"
* Click "Install Now"
* After installation completes, select "Return to Themes Page"


### Install Specia Child Theme
* If you are not on the "Add Themes" page, repeat the first three steps of the Install Special Theme guide above.
* Click "Upload Themes" button, to the right of the title "Add Themes"
* Click "Browse", then navigate to your desktop or downloads folder
* Select the specia-child.zip file and click "Open"
* Click "Install Now"
* After installation completes, select "Activate"

**end installation**

## Initial Setup

_What you need:_

* Images needed
	* logo size 150px by 150px
	* logo size 512px by 512px
	* images for the slide, up to three
	* an image for each tile you wish to be visible on the Home Page
* Pages
	* a page created for static front page
		* Select "Pages" on the Dashboard left column, then click "Add New"
		* Enter a title
		* Under "Page Attributes" on the right side column click the drop down arrow under "Template." Select "Homepage One." 
		* Content can be added later
		* Click the "Publish" button in the top right column box
		* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-2) for further help and screenshots
	* up to three pages created for Home Page slider
		* Select "Pages" on the Dashboard left column, then click "Add New"
		* Enter a title
		* Content can be added later
		* Click "Set featured image" in the lower right column
			* Switch to "Upload Files" tab
			* Click "Select Files" and navigate to your desired slider image for this page OR drag and drop the image file into the screen
			* In the right sidebar under the logo image, enter an alt text description of your image
			* Click "Select" at the bottom right corner of the screen
		* Click the "Publish" button in the top right column box
	* a page created for the Call to Action section below the Slider
		* title this page with an explanatory description for the Call to Action Section
		* Restrict content to 55 words, to avoid clipping at the end.
		* Click the "Publish" button in the top right column box
	* pages created for each tile you wish to be visible on the Home Page after the Call to Action section, either 3 or 6
		* Select "Pages" on the Dashboard left column, then click "Add New" 
		* Enter a title
		* Content can be added later
		* Click "Set featured image" in the lower right column
			* Switch to "Upload Files" tab
			* Click "Select Files" and navigate to your desired slider image for this page OR drag and drop the image file into the screen
			* In the right sidebar under the logo image, enter an alt text description of your image
			* Click "Select" at the bottom right corner of the screen
		* Click the "Publish" button in the top right column box
	* a page created to hold blog posts
		* Select "Pages" on the Dashboard left column, then click "Add New" 
		* Enter a title (this page will not display its own content or featured image so leave those areas blank)		
		* Click the "Publish" button in the top right column box

### Optional Social Icons ThemeGrill Plugin

This theme has a default section for Social Media Icons, which include Facebook, LinkedIn, Twitter, Google Plus, and Instagram. If you have any additional Social Media accounts, such as YouTube, Pinterest, Vimeo, etc. you will want to install the optional Social Icons Themegrill Plugin

* In your Dashboard, click "Plugins" on the left hand sidebar
* Click "Add New", to the right of the title 
* In the "Search Plugins" search field, enter 'Social Icons'
* Click "Install Now" on the plugin that reads "by ThemeGrill"
* Click "Activate"
* Click "Settings" on the left hand sidebar
* Click "Social Icons"
* Click "Add New" next to the Social Icons title
* Enter a title for your menu of icons
* Social Data setup
	* In the "Social Data" box, Background Style, click the drop down arrow and select "Square"
	* Skip "Choose Icon Size" 
	* Check the box for "Greyscale Icon" and skip "Manage Label" and "Open New Tab"
	* On the left column in the "Social Data" box, click "Linked Icons"
	* Change the Label on the Twitter row to Twitter, then enter your full Twitter account link under "Social URL"
	* Change the label on the Facebook row to Facebook, then enter your full Facebook link under "Social URL"
	* For additional accounts, click "Add Icon"
		* Enter the name of the service in "Label" field
		* Enter your account link in the "Social URL" field (your icon may not show up until you click "Publish" if you paste in your link, but it will still work fine.)
	* When you have entered all of your accounts, click "Publish" in the Publish box on the right side
* Click "Social Icons" on the left sidebar under Settings again
* In the center field of the table, under the heading "Shortcode," note the id number. We will use that later to connect to this group of icons


![diagram](https://github.com/bekahsealey/specia-child/blob/master/img/sections-diagram.jpg)
 
### Begin Customization
* Enter Customize - Dashboard -> Appearance -> Customize

1. Setting up Site Identity
	* Click "Site Identity"
		1. Click "Select logo"
			* Switch to "Upload Files" tab
			* Click "Select Files" and navigate to your 150px by 150px logo image OR drag and drop the image file into the screen
			* In the right sidebar under the logo image, enter an alt text description of your image
			* Click "Select" at the bottom right corner of the screen
			* If you have already prepared your file to 150px by 150px, click "Skip Cropping" in the lower right corner of the screen. If not, go back and create a 150px by 150px version of the logo and start again at step 1.1. Click "Select logo"
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-5) for further help and screenshots
		2. In "Site Title," enter your state party name
		3. In "Tagline," enter your state party motto
		4. Under "Site Icon," click "Select Image"
			* Switch to "Upload Files" tab
			* Click "Select Files" and navigate to your 512px by 512px logo image OR drag and drop the image file into the screen
			* In the right sidebar under the logo image, enter an alt text description of your image
			* Click "Select" at the bottom right corner of the screen
		5. Click "Save & Publish" at the top right corner of the Customize side panel.
		6. Click the back arrow next to "Customizing Site Identity" directly below the "Save & Publish" button (scroll up if it is not visible)
2. Skip sections "Colors", "Header Image", "Background Image", "Menus", and "Widgets"
3. Setting up Static Front Page
	* Click "Static Front Page"
		1. Select the radio button labeled "A static page"
		2. Click the drop down arrow under "Front Page" and select the page you created with the template "Homepage One"
		3. Click the drop down arrow under "Posts Page" and select the page you created to contain the Blog posts
		4. Click "Save & Publish" at the top right corner of the Customize side panel
		5. Click the back arrow next to "Customizing Static Front Page" directly below the "Save & Publish" button
4. Setting up Header Section
	* Click "Header Section"
		1. Click "Social Media"
			* Check the list of available social media accounts and note whether all your accounts could be listed here...if you use YouTube, Pinterest, Vimeo and many others, you'll want to use the optional Social Icons ThemeGrill Plugin.
				* Click the radio button labeled "Hide" and skip to "Save & Publish" step if you already installed the Optional Social Icons ThemeGrill Plugin
				* If you did not already install it, go back to the "Optional Social Icons ThemeGrill Plugin" step and follow
			* Click the radio button labeled "Show"
			* Enter your social media links under the corresponding labels
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-3) for further help and screenshots
			* Click "Save & Publish" at the top right corner of the Customize side panel(Do not be alarmed if nothing seems to change)
			* Click the back arrow next to "Customizing > Header Section Social Media" directly below the "Save & Publish" button
		2. Click "Header Contact Info"
			* Click the radio button labeled "Show"  (If your social media icons did not show up before, they should be visible now)
			* Under "Email" enter the state party contact email address
			* If desired, under "Contact Number", enter the state party contact phone number
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-4) for further help and screenshots
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Header Section Header Contact Info" directly below the "Save & Publish" button
		3. Click "Sticky Header"
			* Click the radio button labeled "Hide" to turn off the Sticky Header
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Header Section Sticky Header" directly below the "Save & Publish" button
		3. Click "Social Icons ThemeGrill Plugin"
			* If you are using the default icons under the previous "Social Media" step, click the radio button labeled "Hide" to turn off the optional menu and skip to the "Save & Publish" step
			* Enter the id of your Social Icons ThemeGrill Plugin icon group you noted in the installation step
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Header Section Social Icons ThemeGrill Plugin" directly below the "Save & Publish" button
		4. Click "Subscribe Button"
			* If you would like to display a Subscribe button next to the Social Icons, click the radio button labeled "Show"
			* Enter the text for the Subscribe Button label
			* Enter the link to your Subscribe form page
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Header Section Subscribe Button" directly below the "Save & Publish" button
		5. Click the back arrow next to "You are customizing Header Section" directly below the "Save & Publish" button
5. Setting up Home Section
	* Click "Home Section"
		1. Click "Slider Section"
			* If you do not want to use a slider section, click the radio button labeled "Hide," then skip to "Save & Publish" step
			* For each slider image, click the drop down button under "Select Page..." and select the page desired. (When content is entered on the corresponding page, it will be pulled up in the image overlay.)
			* Click "Select Color" under "Slider Background Color"
				* Click the White square on the line of squares
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-6) for further help and screenshots
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Home Section Slider Section" directly below the "Save & Publish" button
		2. Click "Call Action Section"
			* If you do not want to use a Call to Action section, click the radio button labeled "Hide," then skip to "Save & Publish" step
			* Click the drop down arrow under "Select Page for Call Action," and select the page you created for the Call to Action section
			* Enter the text you would like displayed on the button under "Button Label"
			* Enter the link to the page that the Call to Action button should link to. (this may be a Nation Builder page for donation, etc.)
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-7) for further help and screenshots
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Home Section Call Action Section" directly below the "Save & Publish" button
		3. Click "Service Section"
			* Note: Service Section and Portfolio Section are swqpped in order in the layout. If enabled, Service Section will appear below Features Section
			* If you do not want to use a Service section, click the radio button labeled "Hide," then skip to "Save & Publish" step
			* If desired, write a title for the pages in this section under "Service Title"
			* If desired, write a description for the pages in this section in the text box under "Service Description"
			* For each tile in this section, click the drop down button under "Select Page..." and select the page desired. (When content is entered on the corresponding page, and excerpt will display under the featured image.)
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-8) for further help and screenshots
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Home Section Service Section" directly below the "Save & Publish" button
		4. Click "Features Section"
			* *Features is a 'widget area' displayable on the Home page. It's purpose is relatively open-ended, able to hold any active widget. Widgets are added from the Dashboard under Appearance -> Widgets -> Features Widget Area. To learn more about widgets, visit the
			* [WordPress documentation page](https://codex.wordpress.org/WordPress_Widgets)
			* If you do not want to use a Features section, click the radio button labeled "Hide," then skip to "Save & Publish" step
			* If desired, write a title for the pages in this section under "Features Title"
			* If desired, write a description for the pages in this section in the text box under "Features Description"
			* Note: Features Section has been altered from the original theme's intent, so following the original theme documentation will not result in the same output as depicted in that link.
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Home Section Features Section" directly below the "Save & Publish" button
		5. Click "Portfolio Section"
			* Note: Service Section and Portfolio Section are swqpped in order in the layout. If enabled, Portfolio Section will appear below the Call to Action section
			* If you do not want to use a Portfolio section, click the radio button labeled "Hide," then skip to "Save & Publish" step
			* If desired, write a title for the pages in this section under "Portfolio Title"
			* If desired, write a description for the pages in this section in the text box under "Portfolio Description"
			* For each tile in this section, click the drop down button under "Select Page..." and select the page desired. (Only the page title will display as an overlay on these tiles' images)
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-10) for further help and screenshots
			* Portfolio Section has been extended to allow a total of 6 tiles instead of the default three. To set up more than three, click the radio button to "Show" for the extended section and repeat the steps to set page selections.
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Home Section Portfolio Section" directly below the "Save & Publish" button
		6. Click "Blog Section"
			* If you do not want to use a Blog section, click the radio button labeled "Hide," then skip to "Save & Publish" step
			* If desired, write a title for the pages in this section under "Blog Title"
			* If desired, write a description for the pages in this section in the text box under "Blog Description"
			* You may choose to display 3, 6 or 9 tiles under the Blog section by clicking the drop down arrow under "Posts Display"
			* refer to [original theme documentation](http://docs.speciatheme.com/lite/#document-11) for further help and screenshots
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Home Section Blog Section" directly below the "Save & Publish" button
		7. Click the back arrow next to "You are customizing Home Section" directly below the "Save & Publish" button
6. Setting up Footer Section
	* Click "Footer Section"
		1. Click "Copyright Content"
			* Enter **Copyright &copy;{current year} {your state party name}. All Rights Reserved** replacing the items in brackets with the corresponding information in the text box under "Copyright Content"
			* If you would like to include links to legal notices enter the link text and link in each field for each link
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Footer Section Copyright Content" directly below the "Save & Publish" button
		2. Click "Payment Icon"
			* Click the radio button labeled "Hide"
			* Click "Save & Publish" at the top right corner of the Customize side panel
			* Click the back arrow next to "Customizing > Footer Section Copyright Content" directly below the "Save & Publish" button
		3. Click the back arrow next to "You are customizing Footer Section" directly below the "Save & Publish" button
**end customization**

### Using WordPress

Visit the [WordPress website](https://codex.wordpress.org/Main_Page) for more on how to create content and maintain your website.

### Special page layouts

![page template diagram](https://github.com/bekahsealey/specia-child/blob/master/img/page-template-diagram.jpg)

#### Left or Right Sidebar Page

The theme has been set up to default to full-width page layouts for "Pages." If you would like to display a sidebar, place widgets in the "Sidebar Widget Area," then in the page editor, select either "Blog Left Sidebar" or "Page Right Sidebar" in the Page Attributes->Template dropdown.

#### Highlight a Post instead of a Page on the Portfolio Front Page Section

The default set up only allows selection of a Page to display on the Front Page instead of a Post. If you would like to feature a Post (this will only show one post in the Portfolio Section), follow these steps:
* Create a new Page and give it a category. 
	* You can name your Page anything -- the title will not display on the tile, but it will be how you select the page in the Customizer. 
	* Click "Add New Category" at the bottom of the Categories box and create a category. You may want to use a descriptive category like "Front Page Tile", "Tile{number}", or "Featured Tile." Important! Give this page only **one** category
	* Select the "Highlight Category Post" from the Template dropdown in the "Page Attributes" box
	* Click Publish on the Page. 
* Select the Post and add it to the Category
	* Find the Post you would like to feature and open it in the editor
	* Scroll through the Categories until you find and select the Category you assigned to the Page (you can leave other categories that are selected...posts can have multiple categories)
	* Be sure the Post has a Featured Image selected in the Featured Image box on the bottom right column
	* Click Update on the Post
* Refer back to the instructions on setting up the Portfolio Section above to select the Highlight Category Page you created in the Customizer

#### List all Pages that are Children of a Page

This template will display the Featured Image thumbnail and an excerpt of each page that is set as a Child of the page. In the Parent Page, select "List Children of Page" in the page editor from the Page Attributes->Template dropdown and publish or update the page. Be sure to select this Page as a Parent in the Page Attributes->Parent dropdown on each intended Child Page.

#### Parent Category Template

This template creates a custom page layout that will feature the newest post of each Category Child of the Parent Category, and then list all posts that fall within the Category below. It will also display the Horizontal Sidebar at the top of the Page if there are widgets set up in it. If Jetpack plugin is installed, use the [Jetpack Visibility](https://jetpack.com/support/widget-visibility/) settings to further customize which widgets will be visible on which pages. 
* In the Parent Page, select or create the Category whose children you would like to feature (select a single category only). 
* Select "Parent Category" in the page editor from the Page Attributes->Template dropdown. 
* Publish or Update the page
* Click Posts on the Dashboard left sidebar
* Click Categories on the Dashboard left sidebar
* Select or create each Category you would like to make a child of the Category attached to the Parent Category Page, and set the Parent in the Parent dropdown box
* Update the Category
* Note: the template is set to not duplicate the latest post in a child category, so if you only have one post in each category, you will see a "No posts found" message
* If you have the WordPress Responsive Thumbnail Slider installed to create a Recommended Reading list, create a Page with the "Education Station" Category and it will automatically display under the Latest Posts

#### State Parties Page

Not intended for individual State use. Requires "Advanced Custom Fields" Plugin

#### Page with Featured Image Thumbnail Aligned on the Left

The default page template will use a large version of the Page's Featured Image centered above the Page content. If you would prefer to use a smaller image aligned to the left of the content, in the Page editor, select "Thumbnail Left Aligned" from the Page Attributes->Template dropdown box.

### Recommended Plugins

See each plugin's own documentation for configuration
* Jetpack (requires creating free Wordpress.com account) by WordPress.com by Automattic
* Wordfence Security by Wordfence
* WordPress Responsive Thumbnail Slider by Thirteen Web Solution (used as Recommended Reading on Education Station)
* If you are reorganizing an existing site (WordPress or not): Eggplant 301 Redirects by Shawn Wernig
* Flickr - Pick a Picture by Pablo Adrian Castillo (for adding Creative Commons images to Posts and Pages)
* Google Analytics by ShareThis
* Social Icons by ThemeGrill (setup documented above)


### Custom Post Types

The National page uses a custom post type to contain and display the State and Local Candidates, Chairman's Messages, Executive Committee, and FAQs Sections of the website. If you have need of these special sections, please request the plugin.
