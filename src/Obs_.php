<?php

declare(strict_types=1);

namespace iggyvolz\obs;

/**
 * @autogenerated
 */
trait Obs_
{
    use Requests\GetPersistentData;
    use Requests\SetPersistentData;
    use Requests\GetSceneCollectionList;
    use Requests\SetCurrentSceneCollection;
    use Requests\CreateSceneCollection;
    use Requests\GetProfileList;
    use Requests\SetCurrentProfile;
    use Requests\CreateProfile;
    use Requests\RemoveProfile;
    use Requests\GetProfileParameter;
    use Requests\SetProfileParameter;
    use Requests\GetVideoSettings;
    use Requests\SetVideoSettings;
    use Requests\GetStreamServiceSettings;
    use Requests\SetStreamServiceSettings;
    use Requests\GetRecordDirectory;
    use Requests\GetSourceFilterList;
    use Requests\GetSourceFilterDefaultSettings;
    use Requests\CreateSourceFilter;
    use Requests\RemoveSourceFilter;
    use Requests\SetSourceFilterName;
    use Requests\GetSourceFilter;
    use Requests\SetSourceFilterIndex;
    use Requests\SetSourceFilterSettings;
    use Requests\GetVersion;
    use Requests\GetStats;
    use Requests\BroadcastCustomEvent;
    use Requests\CallVendorRequest;
    use Requests\GetHotkeyList;
    use Requests\TriggerHotkeyByName;
    use Requests\TriggerHotkeyByKeySequence;
    use Requests\Sleep;
    use Requests\GetInputList;
    use Requests\GetInputKindList;
    use Requests\GetSpecialInputs;
    use Requests\CreateInput;
    use Requests\RemoveInput;
    use Requests\SetInputName;
    use Requests\GetInputDefaultSettings;
    use Requests\GetInputSettings;
    use Requests\SetInputSettings;
    use Requests\GetInputMute;
    use Requests\SetInputMute;
    use Requests\ToggleInputMute;
    use Requests\GetInputVolume;
    use Requests\SetInputVolume;
    use Requests\GetInputAudioBalance;
    use Requests\SetInputAudioBalance;
    use Requests\GetInputAudioSyncOffset;
    use Requests\SetInputAudioSyncOffset;
    use Requests\GetInputAudioMonitorType;
    use Requests\SetInputAudioMonitorType;
    use Requests\GetInputAudioTracks;
    use Requests\SetInputAudioTracks;
    use Requests\GetInputPropertiesListPropertyItems;
    use Requests\PressInputPropertiesButton;
    use Requests\GetMediaInputStatus;
    use Requests\SetMediaInputCursor;
    use Requests\OffsetMediaInputCursor;
    use Requests\TriggerMediaInputAction;
    use Requests\GetVirtualCamStatus;
    use Requests\ToggleVirtualCam;
    use Requests\StartVirtualCam;
    use Requests\StopVirtualCam;
    use Requests\GetReplayBufferStatus;
    use Requests\ToggleReplayBuffer;
    use Requests\StartReplayBuffer;
    use Requests\StopReplayBuffer;
    use Requests\SaveReplayBuffer;
    use Requests\GetLastReplayBufferReplay;
    use Requests\GetRecordStatus;
    use Requests\ToggleRecord;
    use Requests\StartRecord;
    use Requests\StopRecord;
    use Requests\ToggleRecordPause;
    use Requests\PauseRecord;
    use Requests\ResumeRecord;
    use Requests\GetSceneItemList;
    use Requests\GetGroupItemList;
    use Requests\GetSceneItemId;
    use Requests\CreateSceneItem;
    use Requests\RemoveSceneItem;
    use Requests\DuplicateSceneItem;
    use Requests\GetSceneItemTransform;
    use Requests\SetSceneItemTransform;
    use Requests\GetSceneItemEnabled;
    use Requests\SetSceneItemEnabled;
    use Requests\GetSceneItemLocked;
    use Requests\SetSceneItemLocked;
    use Requests\GetSceneItemIndex;
    use Requests\SetSceneItemIndex;
    use Requests\GetSceneItemBlendMode;
    use Requests\SetSceneItemBlendMode;
    use Requests\GetSceneList;
    use Requests\GetGroupList;
    use Requests\GetCurrentProgramScene;
    use Requests\SetCurrentProgramScene;
    use Requests\GetCurrentPreviewScene;
    use Requests\SetCurrentPreviewScene;
    use Requests\CreateScene;
    use Requests\RemoveScene;
    use Requests\SetSceneName;
    use Requests\GetSceneSceneTransitionOverride;
    use Requests\SetSceneSceneTransitionOverride;
    use Requests\GetSourceActive;
    use Requests\GetSourceScreenshot;
    use Requests\SaveSourceScreenshot;
    use Requests\GetStreamStatus;
    use Requests\ToggleStream;
    use Requests\StartStream;
    use Requests\StopStream;
    use Requests\SendStreamCaption;
    use Requests\GetTransitionKindList;
    use Requests\GetSceneTransitionList;
    use Requests\GetCurrentSceneTransition;
    use Requests\SetCurrentSceneTransition;
    use Requests\SetCurrentSceneTransitionDuration;
    use Requests\SetCurrentSceneTransitionSettings;
    use Requests\GetCurrentSceneTransitionCursor;
    use Requests\TriggerStudioModeTransition;
    use Requests\SetTBarPosition;
    use Requests\GetStudioModeEnabled;
    use Requests\SetStudioModeEnabled;
    use Requests\OpenInputPropertiesDialog;
    use Requests\OpenInputFiltersDialog;
    use Requests\OpenInputInteractDialog;
}
