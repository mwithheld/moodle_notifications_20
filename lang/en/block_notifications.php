<?php
$string['pluginname'] = 'Notifications';
$string['notifications'] = 'Notifications';
$string['notifications:addinstance'] = 'Add Notifications block';
$string['notifications:myaddinstance'] = 'Add Notifications block to My Moodle Page';
$string['configuration_comment'] = 'None notification channel enabled.';
$string['global_configuration_comment'] = 'Globally enabled notification channels.';
$string['notify_by_email'] = 'Notify by e-mail';
$string['notify_by_sms'] = 'Notify by SMS';
$string['notify_by_rss'] = 'Notify by RSS';
$string['global_configuration_presets_comment'] = 'The presets allow you to set default user settings for email and sms channels. These presets are global but they can be changed on the course level.';
$string['global_configuration_presets_actions_comment'] = 'Preset the actions that are going to be notified to the users.';
$string['course_configuration_presets_comment'] = 'The presets allow you to set default user settings for email and sms channels. These settings are going to affect only the users that have not defined their preferences.';
$string['email_notification_preset'] = 'eMail preset';
$string['email_notification_preset_explanation'] = 'Preset email notifications for the user if email channel enabled.';
$string['sms_notification_preset'] = 'SMS preset';
$string['sms_notification_preset_explanation'] = 'Preset sms notifications for the user if sms channel enabled.';
$string['last_notification'] = 'Last';
$string['email_icon_tooltip'] = 'The notification of new content via e-mail is enabled. You will receive an e-mail every';
$string['sms_icon_tooltip'] = 'The notification of new content via SMS is enabled. You will receive an sms every';
$string['end_of_tooltip'] = 'hours if new contents or activities are added to the course.';
$string['sms_icon_phone_number_missing_tooltip'] = 'Mobile phone number not set. Click for instructions on how to proceed to set your personal number.';
$string['sms_class_not_implemented'] = 'This channel is not available in your installation. Please refer to the README.txt file inside the plugin directory for more information on how to proceed to enable it.';
$string['rss_icon_tooltip'] = 'The notification of new content via RSS is enabled. Click on the icon to open RSS channel and to subscribe.';
$string['email'] = 'e-mail';
$string['sms'] = 'SMS';
$string['rss'] = 'RSS';
$string['rss_by_shortname'] = 'Identify the course RSS by using the shortname url option; The default is the course id.';
$string['notification_frequency'] = 'Checking new contents frequency in hours:';
$string['notification_frequency_comment'] = 'Checking of the new contents in courses will be performed every number of hours specified here. This value can be overwritten by course settings.';
$string['mailsubject'] = 'Updates on course';
$string['user_preference_settings'] = 'Personal Settings';
$string['user_preference_header'] = 'Enable or Disable your notification channels';
// ACTION LABELS
$string['global_actions_explanation'] = 'Global settings for the notifications of the actions on the course. The selected actions are going to be notified to the users. All the available actions can stil be disabled in the course. If disabled here they are going to be disabled globally in all the courses';
$string['actions_explanation'] = 'Notifications of the actions on the course. The selected actions are going to be notified to the users.';
$string['action_added_explanation'] = 'Notifies when a module (resource or activity) is added to the course.';
$string['action_updated_explanation'] = 'Notifies when a module (resource or activity) is modified.';
$string['action_edited_explanation'] = 'Notifies when some of the content in modules, such as Wiki and Assignment, are modified';
$string['action_deleted_explanation'] = 'Notifies when a module (resource or activity) is deleted.';
$string['action_added_discussion_explanation'] = 'Notifies whan a new discussion is added to a forum';
$string['action_deleted_discussion_explanation'] = 'Notifies when a discussion is deleted';
$string['action_added_post_explanation'] = 'Notifies whan a new post is added to a discussion';
$string['action_updated_post_explanation'] = 'Notifies when a post is updated';
$string['action_deleted_post_explanation'] = 'Notifies when a post is deleted';
$string['action_added_chapter_explanation'] = 'Notifies whan a new chapter is added to a book';
$string['action_updated_chapter_explanation'] = 'Notifies when a chapter is updated';
$string['action_added_entry_explanation'] = 'Notifies whan a new entry is added to a glossary';
$string['action_updated_entry_explanation'] = 'Notifies whan an entry in the glossary is updated';
$string['action_deleted_entry_explanation'] = 'Notifies whan an entry in the glossary is deleted';
$string['action_added_fields_explanation'] = 'Notifies whan a new field is added to a database';
$string['action_updated_fields_explanation'] = 'Notifies when a field in the database is updated';
$string['action_deleted_fields_explanation'] = 'Notifies when a field is deleted from the database';
$string['action_edited_questions_explanation'] = 'Notifies when the questions of a quiz are modified';
// ACTIONS
$string['added'] = 'Added';
$string['updated'] = 'Updated';
$string['edited'] = 'Edited';
$string['deleted'] = 'Deleted';
$string['added_discussion'] = 'New discussion';
$string['updated_discussion'] = 'Updated discussion';
$string['deleted_discussion'] = 'Deleted discussion';
$string['added_post'] = 'New post';
$string['updated_post'] = 'Updated post';
$string['deleted_post'] = 'Deleted post';
$string['added_chapter'] = 'New chapter';
$string['updated_chapter'] = 'Updated chapter';
$string['added_entry'] = 'New entry';
$string['updated_entry'] = 'Updated entry';
$string['deleted_entry'] = 'Deleted entry';
$string['added_fields'] = 'New fields';
$string['updated_fields'] = 'Updated fields';
$string['deleted_fields'] = 'Deleted fields';
$string['edited_questions'] = 'Edited';
// MODULES
$string['assign'] = 'Assignment';
$string['assignment'] = 'Assignment';
$string['chat'] = 'Chat';
$string['url'] = 'Web link';
$string['page'] = 'Page';
$string['imscp'] = 'IMS package';
$string['folder'] = 'Folder';
$string['choice'] = 'Choice';
$string['choicegroup'] = 'Group choice';
$string['data'] = 'Database';
$string['forum'] = 'Forum';
$string['glossary'] = 'Glossary';
$string['lesson'] = 'Lesson';
$string['lightboxgallery'] = 'Gallery';
$string['quiz'] = 'Quiz';
$string['scorm'] = 'Scorm';
$string['survey'] = 'Survey';
$string['wiki'] = 'Wiki';
$string['resource'] = 'Resource';
$string['workshop'] = 'Workshop';
$string['quizport'] = 'Quizport';
$string['checklist'] = 'Checklist';
$string['book'] = 'Book';
// HELP
$string['help_title'] = 'Set your mobile number';
$string['set_mobile_number_instructions'] = 'Go to the course page and click on your name in the top right corner. Then click on Edit Profile and go to the bottom of the page. Put your number inside Mobile Phone field and then click on Update profile to save.';

//UTILITY
$string['rss_empty_title'] = 'RSS empty';
$string['rss_empty_description'] = 'This RSS is empty. Wait of the platform to scan and output the course content.';
$string['rss_not_enabled'] = 'RSS on this course is not enabled.';
?>
