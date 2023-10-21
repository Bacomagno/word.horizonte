<?php

/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
namespace PYS_PRO_GLOBAL\FacebookAds\Object;

use PYS_PRO_GLOBAL\FacebookAds\ApiRequest;
use PYS_PRO_GLOBAL\FacebookAds\Cursor;
use PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface;
use PYS_PRO_GLOBAL\FacebookAds\TypeChecker;
use PYS_PRO_GLOBAL\FacebookAds\Object\Fields\GroupFields;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoContainerTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoContentCategoryValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoFormattingValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoSwapModeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupGroupTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupJoinSettingValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPostPermissionsValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPurposeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoProjectionValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoSourceValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoStatusValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoStreamTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostBackdatedTimeGranularityValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostCheckinEntryPointValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostFormattingValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostPlaceAttachmentSettingValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostPostSurfacesBlacklistValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostPostingToRedspaceValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostTargetSurfaceValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostUnpublishedContentTypeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\ProfilePictureSourceBreakingChangeValues;
use PYS_PRO_GLOBAL\FacebookAds\Object\Values\ProfilePictureSourceTypeValues;
/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */
class Group extends \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject
{
    /**
     * @return GroupFields
     */
    public static function getFieldsEnum()
    {
        return \PYS_PRO_GLOBAL\FacebookAds\Object\Fields\GroupFields::getInstance();
    }
    protected static function getReferencedEnums()
    {
        $ref_enums = array();
        $ref_enums['JoinSetting'] = \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupJoinSettingValues::getInstance()->getValues();
        $ref_enums['PostPermissions'] = \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPostPermissionsValues::getInstance()->getValues();
        $ref_enums['Purpose'] = \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPurposeValues::getInstance()->getValues();
        $ref_enums['GroupType'] = \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupGroupTypeValues::getInstance()->getValues();
        return $ref_enums;
    }
    public function deleteAdmins(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('uid' => 'int');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_DELETE, '/admins', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createAdmin(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('uid' => 'int');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/admins', new \PYS_PRO_GLOBAL\FacebookAds\Object\Group(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Group::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getAlbums(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/albums', new \PYS_PRO_GLOBAL\FacebookAds\Object\Album(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Album::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createAlbum(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('contributors' => 'list<int>', 'description' => 'string', 'is_default' => 'bool', 'location' => 'string', 'make_shared_album' => 'bool', 'message' => 'string', 'name' => 'string', 'place' => 'Object', 'privacy' => 'string', 'tags' => 'list<int>', 'visible' => 'string');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/albums', new \PYS_PRO_GLOBAL\FacebookAds\Object\Album(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Album::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getAttachmentSurfaces(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/attachment_surfaces', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createAttachmentSurface(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('title' => 'map');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/attachment_surfaces', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getDocs(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/docs', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getEvents(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/events', new \PYS_PRO_GLOBAL\FacebookAds\Object\Event(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Event::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getFeaturedCards(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/featured_cards', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createFeaturedCard(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('body' => 'map', 'description' => 'map', 'title' => 'map');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/featured_cards', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getFeed(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('include_hidden' => 'bool', 'q' => 'string', 'show_expired' => 'bool', 'since' => 'datetime', 'until' => 'datetime', 'with' => 'string');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/feed', new \PYS_PRO_GLOBAL\FacebookAds\Object\Post(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Post::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createFeed(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('actions' => 'Object', 'adaptive_type' => 'string', 'album_id' => 'string', 'android_key_hash' => 'string', 'animated_effect_id' => 'unsigned int', 'application_id' => 'string', 'asked_fun_fact_prompt_id' => 'unsigned int', 'asset3d_id' => 'unsigned int', 'associated_id' => 'string', 'attach_place_suggestion' => 'bool', 'attached_media' => 'list<Object>', 'audience_exp' => 'bool', 'backdated_time' => 'datetime', 'backdated_time_granularity' => 'backdated_time_granularity_enum', 'call_to_action' => 'Object', 'caption' => 'string', 'checkin_entry_point' => 'checkin_entry_point_enum', 'child_attachments' => 'list<Object>', 'client_mutation_id' => 'string', 'composer_entry_picker' => 'string', 'composer_entry_point' => 'string', 'composer_entry_time' => 'unsigned int', 'composer_session_events_log' => 'string', 'composer_session_id' => 'string', 'composer_source_surface' => 'string', 'composer_type' => 'string', 'connection_class' => 'string', 'content_attachment' => 'string', 'coordinates' => 'Object', 'cta_link' => 'string', 'cta_type' => 'string', 'description' => 'string', 'direct_share_status' => 'unsigned int', 'expanded_height' => 'unsigned int', 'expanded_width' => 'unsigned int', 'feed_targeting' => 'Object', 'formatting' => 'formatting_enum', 'fun_fact_prompt_id' => 'unsigned int', 'fun_fact_toastee_id' => 'unsigned int', 'has_nickname' => 'bool', 'height' => 'unsigned int', 'holiday_card' => 'string', 'home_checkin_city_id' => 'Object', 'image_crops' => 'map', 'implicit_with_tags' => 'list<int>', 'instant_game_entry_point_data' => 'string', 'ios_bundle_id' => 'string', 'is_backout_draft' => 'bool', 'is_boost_intended' => 'bool', 'is_explicit_location' => 'bool', 'is_explicit_share' => 'bool', 'is_group_linking_post' => 'bool', 'is_photo_container' => 'bool', 'link' => 'string', 'location_source_id' => 'string', 'manual_privacy' => 'bool', 'message' => 'string', 'multi_share_end_card' => 'bool', 'multi_share_optimized' => 'bool', 'name' => 'string', 'nectar_module' => 'string', 'object_attachment' => 'string', 'offer_like_post_id' => 'unsigned int', 'og_action_type_id' => 'string', 'og_hide_object_attachment' => 'bool', 'og_icon_id' => 'string', 'og_object_id' => 'string', 'og_phrase' => 'string', 'og_set_profile_badge' => 'bool', 'og_suggestion_mechanism' => 'string', 'page_recommendation' => 'string', 'picture' => 'string', 'place' => 'Object', 'place_attachment_setting' => 'place_attachment_setting_enum', 'place_list' => 'string', 'place_list_data' => 'list', 'post_surfaces_blacklist' => 'list<post_surfaces_blacklist_enum>', 'posting_to_redspace' => 'posting_to_redspace_enum', 'privacy' => 'string', 'prompt_id' => 'string', 'prompt_tracking_string' => 'string', 'properties' => 'Object', 'proxied_app_id' => 'string', 'publish_event_id' => 'unsigned int', 'published' => 'bool', 'quote' => 'string', 'react_mode_metadata' => 'string', 'ref' => 'list<string>', 'referenceable_image_ids' => 'list<string>', 'referral_id' => 'string', 'scheduled_publish_time' => 'datetime', 'source' => 'string', 'sponsor_id' => 'string', 'sponsor_relationship' => 'unsigned int', 'suggested_place_id' => 'Object', 'tags' => 'list<int>', 'target_surface' => 'target_surface_enum', 'targeting' => 'Object', 'text_format_metadata' => 'string', 'text_format_preset_id' => 'string', 'text_only_place' => 'string', 'throwback_camera_roll_media' => 'string', 'thumbnail' => 'file', 'time_since_original_post' => 'unsigned int', 'title' => 'string', 'tracking_info' => 'string', 'unpublished_content_type' => 'unpublished_content_type_enum', 'user_selected_tags' => 'bool', 'video_start_time_ms' => 'unsigned int', 'viewer_coordinates' => 'Object', 'width' => 'unsigned int');
        $enums = array('backdated_time_granularity_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostBackdatedTimeGranularityValues::getInstance()->getValues(), 'checkin_entry_point_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostCheckinEntryPointValues::getInstance()->getValues(), 'formatting_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostFormattingValues::getInstance()->getValues(), 'place_attachment_setting_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostPlaceAttachmentSettingValues::getInstance()->getValues(), 'post_surfaces_blacklist_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostPostSurfacesBlacklistValues::getInstance()->getValues(), 'posting_to_redspace_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostPostingToRedspaceValues::getInstance()->getValues(), 'target_surface_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostTargetSurfaceValues::getInstance()->getValues(), 'unpublished_content_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PostUnpublishedContentTypeValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/feed', new \PYS_PRO_GLOBAL\FacebookAds\Object\Post(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Post::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getFiles(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/files', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getGroups(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/groups', new \PYS_PRO_GLOBAL\FacebookAds\Object\Group(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Group::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createGroup(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('admin' => 'int', 'description' => 'string', 'group_icon_id' => 'Object', 'group_type' => 'group_type_enum', 'join_setting' => 'join_setting_enum', 'name' => 'string', 'parent_id' => 'Object', 'post_permissions' => 'post_permissions_enum', 'post_requires_admin_approval' => 'bool', 'privacy' => 'string', 'ref' => 'string');
        $enums = array('group_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupGroupTypeValues::getInstance()->getValues(), 'join_setting_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupJoinSettingValues::getInstance()->getValues(), 'post_permissions_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPostPermissionsValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/groups', new \PYS_PRO_GLOBAL\FacebookAds\Object\Group(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Group::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getLiveVideos(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('broadcast_status' => 'list<broadcast_status_enum>', 'source' => 'source_enum');
        $enums = array('broadcast_status_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoBroadcastStatusValues::getInstance()->getValues(), 'source_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoSourceValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/live_videos', new \PYS_PRO_GLOBAL\FacebookAds\Object\LiveVideo(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\LiveVideo::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createLiveVideo(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('content_tags' => 'list<string>', 'description' => 'string', 'enable_backup_ingest' => 'bool', 'encoding_settings' => 'string', 'event_params' => 'Object', 'fisheye_video_cropped' => 'bool', 'front_z_rotation' => 'float', 'is_audio_only' => 'bool', 'is_spherical' => 'bool', 'original_fov' => 'unsigned int', 'planned_start_time' => 'int', 'privacy' => 'string', 'projection' => 'projection_enum', 'published' => 'bool', 'schedule_custom_profile_image' => 'file', 'spatial_audio_format' => 'spatial_audio_format_enum', 'status' => 'status_enum', 'stereoscopic_mode' => 'stereoscopic_mode_enum', 'stop_on_delete_stream' => 'bool', 'stream_type' => 'stream_type_enum', 'title' => 'string');
        $enums = array('projection_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoProjectionValues::getInstance()->getValues(), 'spatial_audio_format_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues::getInstance()->getValues(), 'status_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoStatusValues::getInstance()->getValues(), 'stereoscopic_mode_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoStereoscopicModeValues::getInstance()->getValues(), 'stream_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\LiveVideoStreamTypeValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/live_videos', new \PYS_PRO_GLOBAL\FacebookAds\Object\LiveVideo(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\LiveVideo::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function deleteMembers(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('email' => 'string', 'member' => 'int');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_DELETE, '/members', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createMember(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('email' => 'string', 'from' => 'int', 'member' => 'int', 'rate' => 'unsigned int', 'source' => 'string');
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/members', new \PYS_PRO_GLOBAL\FacebookAds\Object\Group(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Group::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getOptedInMembers(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array();
        $enums = array();
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/opted_in_members', new \PYS_PRO_GLOBAL\FacebookAds\Object\User(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\User::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createPhoto(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('aid' => 'string', 'allow_spherical_photo' => 'bool', 'alt_text_custom' => 'string', 'android_key_hash' => 'string', 'application_id' => 'string', 'attempt' => 'unsigned int', 'audience_exp' => 'bool', 'backdated_time' => 'datetime', 'backdated_time_granularity' => 'backdated_time_granularity_enum', 'caption' => 'string', 'composer_session_id' => 'string', 'direct_share_status' => 'unsigned int', 'feed_targeting' => 'Object', 'filter_type' => 'unsigned int', 'full_res_is_coming_later' => 'bool', 'initial_view_heading_override_degrees' => 'unsigned int', 'initial_view_pitch_override_degrees' => 'unsigned int', 'initial_view_vertical_fov_override_degrees' => 'unsigned int', 'ios_bundle_id' => 'string', 'is_explicit_location' => 'bool', 'is_explicit_place' => 'bool', 'manual_privacy' => 'bool', 'message' => 'string', 'name' => 'string', 'no_story' => 'bool', 'offline_id' => 'unsigned int', 'og_action_type_id' => 'string', 'og_icon_id' => 'string', 'og_object_id' => 'string', 'og_phrase' => 'string', 'og_set_profile_badge' => 'bool', 'og_suggestion_mechanism' => 'string', 'place' => 'Object', 'privacy' => 'string', 'profile_id' => 'int', 'proxied_app_id' => 'string', 'published' => 'bool', 'qn' => 'string', 'scheduled_publish_time' => 'unsigned int', 'spherical_metadata' => 'map', 'sponsor_id' => 'string', 'sponsor_relationship' => 'unsigned int', 'tags' => 'list<Object>', 'target_id' => 'int', 'targeting' => 'Object', 'time_since_original_post' => 'unsigned int', 'uid' => 'int', 'unpublished_content_type' => 'unpublished_content_type_enum', 'url' => 'string', 'user_selected_tags' => 'bool', 'vault_image_id' => 'string');
        $enums = array('backdated_time_granularity_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues::getInstance()->getValues(), 'unpublished_content_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/photos', new \PYS_PRO_GLOBAL\FacebookAds\Object\Photo(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\Photo::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getPicture(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('breaking_change' => 'breaking_change_enum', 'height' => 'int', 'redirect' => 'bool', 'type' => 'type_enum', 'width' => 'int');
        $enums = array('breaking_change_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\ProfilePictureSourceBreakingChangeValues::getInstance()->getValues(), 'type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\ProfilePictureSourceTypeValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/picture', new \PYS_PRO_GLOBAL\FacebookAds\Object\ProfilePictureSource(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\ProfilePictureSource::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createShiftSetting(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('external_id' => 'string', 'shift_feature_setting' => 'shift_feature_setting_enum');
        $enums = array('shift_feature_setting_enum' => array('ALL_FEATURES_OFF', 'ALL_FEATURES_ON', 'SHIFT_COVER_ONLY_ON', 'SHIFT_VIEWER_ONLY_ON'));
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/shift_settings', new \PYS_PRO_GLOBAL\FacebookAds\Object\AbstractCrudObject(), 'EDGE', array(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getVideos(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('type' => 'type_enum');
        $enums = array('type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoTypeValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/videos', new \PYS_PRO_GLOBAL\FacebookAds\Object\AdVideo(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\AdVideo::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function createVideo(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('adaptive_type' => 'string', 'animated_effect_id' => 'unsigned int', 'application_id' => 'string', 'asked_fun_fact_prompt_id' => 'unsigned int', 'audio_story_wave_animation_handle' => 'string', 'composer_entry_picker' => 'string', 'composer_entry_point' => 'string', 'composer_entry_time' => 'unsigned int', 'composer_session_events_log' => 'string', 'composer_session_id' => 'string', 'composer_source_surface' => 'string', 'composer_type' => 'string', 'container_type' => 'container_type_enum', 'content_category' => 'content_category_enum', 'creative_tools' => 'string', 'description' => 'string', 'embeddable' => 'bool', 'end_offset' => 'unsigned int', 'fbuploader_video_file_chunk' => 'string', 'file_size' => 'unsigned int', 'file_url' => 'string', 'fisheye_video_cropped' => 'bool', 'formatting' => 'formatting_enum', 'fov' => 'unsigned int', 'front_z_rotation' => 'float', 'fun_fact_prompt_id' => 'unsigned int', 'fun_fact_toastee_id' => 'unsigned int', 'guide' => 'list<list<unsigned int>>', 'guide_enabled' => 'bool', 'has_nickname' => 'bool', 'holiday_card' => 'string', 'initial_heading' => 'unsigned int', 'initial_pitch' => 'unsigned int', 'instant_game_entry_point_data' => 'string', 'is_boost_intended' => 'bool', 'is_explicit_share' => 'bool', 'is_group_linking_post' => 'bool', 'is_voice_clip' => 'bool', 'location_source_id' => 'string', 'manual_privacy' => 'bool', 'offer_like_post_id' => 'unsigned int', 'og_action_type_id' => 'string', 'og_icon_id' => 'string', 'og_object_id' => 'string', 'og_phrase' => 'string', 'og_suggestion_mechanism' => 'string', 'original_fov' => 'unsigned int', 'original_projection_type' => 'original_projection_type_enum', 'publish_event_id' => 'unsigned int', 'published' => 'bool', 'react_mode_metadata' => 'string', 'referenced_sticker_id' => 'string', 'replace_video_id' => 'string', 'scheduled_publish_time' => 'unsigned int', 'slideshow_spec' => 'map', 'source' => 'string', 'source_instagram_media_id' => 'string', 'spherical' => 'bool', 'start_offset' => 'unsigned int', 'swap_mode' => 'swap_mode_enum', 'text_format_metadata' => 'string', 'throwback_camera_roll_media' => 'string', 'thumb' => 'file', 'time_since_original_post' => 'unsigned int', 'title' => 'string', 'transcode_setting_properties' => 'string', 'unpublished_content_type' => 'unpublished_content_type_enum', 'upload_phase' => 'upload_phase_enum', 'upload_session_id' => 'string', 'upload_setting_properties' => 'string', 'video_file_chunk' => 'string', 'video_id_original' => 'string', 'video_start_time_ms' => 'unsigned int', 'waterfall_id' => 'string');
        $enums = array('container_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoContainerTypeValues::getInstance()->getValues(), 'content_category_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoContentCategoryValues::getInstance()->getValues(), 'formatting_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoFormattingValues::getInstance()->getValues(), 'original_projection_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues::getInstance()->getValues(), 'swap_mode_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoSwapModeValues::getInstance()->getValues(), 'unpublished_content_type_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues::getInstance()->getValues(), 'upload_phase_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\AdVideoUploadPhaseValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/videos', new \PYS_PRO_GLOBAL\FacebookAds\Object\AdVideo(), 'EDGE', \PYS_PRO_GLOBAL\FacebookAds\Object\AdVideo::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function getSelf(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('icon_size' => 'icon_size_enum');
        $enums = array('icon_size_enum' => array('16', '34', '50', '68'));
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_GET, '/', new \PYS_PRO_GLOBAL\FacebookAds\Object\Group(), 'NODE', \PYS_PRO_GLOBAL\FacebookAds\Object\Group::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
    public function updateSelf(array $fields = array(), array $params = array(), $pending = \false)
    {
        $this->assureId();
        $param_types = array('cover' => 'string', 'cover_url' => 'string', 'description' => 'string', 'focus_x' => 'float', 'focus_y' => 'float', 'group_icon' => 'string', 'is_official_group' => 'bool', 'join_setting' => 'join_setting_enum', 'name' => 'string', 'no_feed_story' => 'bool', 'offset_y' => 'int', 'post_permissions' => 'post_permissions_enum', 'post_requires_admin_approval' => 'bool', 'privacy' => 'string', 'purpose' => 'purpose_enum', 'update_view_time' => 'bool');
        $enums = array('join_setting_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupJoinSettingValues::getInstance()->getValues(), 'post_permissions_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPostPermissionsValues::getInstance()->getValues(), 'purpose_enum' => \PYS_PRO_GLOBAL\FacebookAds\Object\Values\GroupPurposeValues::getInstance()->getValues());
        $request = new \PYS_PRO_GLOBAL\FacebookAds\ApiRequest($this->api, $this->data['id'], \PYS_PRO_GLOBAL\FacebookAds\Http\RequestInterface::METHOD_POST, '/', new \PYS_PRO_GLOBAL\FacebookAds\Object\Group(), 'NODE', \PYS_PRO_GLOBAL\FacebookAds\Object\Group::getFieldsEnum()->getValues(), new \PYS_PRO_GLOBAL\FacebookAds\TypeChecker($param_types, $enums));
        $request->addParams($params);
        $request->addFields($fields);
        return $pending ? $request : $request->execute();
    }
}
